<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\DeleteUserRequest;
use App\User;
use App\Role;
use Hash;
use Illuminate\Http\Request;
/**
 * @group User management
 *
 *
 */
class UserController extends Controller
{
    /**
     * Display a listing of the user.
     */
    public function index()
    {
        $users = User::paginate(10);
        return response()->json($users);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created user in storage.
     * @bodyParam name string required The name of the user.
     * @bodyParam fullname string required The fullname of the user.
     * @bodyParam email string required The email of the user.
     * @bodyParam phone string required The phone of the user.
     * @bodyParam address string The address of the user.
     * @bodyParam password string required The password of the user.
     * @bodyParam password_confirmation string required The confirmed password.
     */
    public function store(CreateUserRequest $request)
    {
        $data = $request->only("name","fullname","email","phone","address","password");
        $data["password"] = Hash::make($data["password"]);
        $user = User::create($data);
        $role_arr = explode (",", request('roles'));
        $user->roles()->attach($role_arr);
        return response()->json([
            'message'=>'Created user successfully']);
    }

    /**
     * Show the profile's information.
     */
    public function showCurrentInfoUser(Request $request)
    {
        $request->user()->roles;
        return response()->json($request->user());
    }


    /**
     * Display a user by id.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $user->roles;
        return response()->json($user);
    }

    public function edit(User $user){
        //
    }


    /**
     * Update the user by id.
     * @bodyParam fullname string required The fullname of the user.
     * @bodyParam email string required The email of the user.
     * @bodyParam phone string required The phone of the user.
     * @bodyParam address string The address of the user.
     * @bodyParam roles string required The string contains role's ID. Example: 1,2
     */
    public function update(UpdateUserRequest $request,$id)
    {
        $user = User::findOrFail($id);
        $user->update($request->only("fullname","email","phone","address"));
        $role_arr = explode (",", request('roles'));
        $user->roles()->sync($role_arr);
        return response()->json([
            'message' => 'Information of user has been updated successfully!'
        ], 200);
    }

    /**
     * Update the current profile.
     * Update the profile.
     * @bodyParam fullname string required The fullname of the user.
     * @bodyParam email string required The email of the user.
     * @bodyParam phone string required The phone of the user.
     * @bodyParam address string The address of the user.
     */
    public function updateCurrentProfile(UserRequest $request)
    {
        // Param need: 'fullname,email,phone,address'
        User::findOrFail($request->user()->id)->update($request->only("fullname","email","phone","address"));

        return response()->json([
            'message' => 'Information has been updated successfully!'
        ], 200);
    }

    /**
     * Delete the user.
     *
     * @bodyParam users string required list id of user want to delete. Example: 1,2,3,4,5
     */
    public function destroy(DeleteUserRequest $request)
    {
        $user_arr = explode (",", request("users"));
        User::destroy($user_arr);
        return response()->json([
           'message'=>'Deleted user successfully']);
    }
}
