<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use App\Role;
use Hash;
/**
 * @group User management
 *
 *
 */
class UserController extends Controller
{
    protected $userServices;

    public function __construct()
    {
        $this->userServices = new UserServices;
    }

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
     * Upload the image avatar profile.
     * @bodyParam image file required The image avatar profile.
     */
    public function changeAvatar(Request $request){
        $this->validate($request,
        ['image' => 'mimes:jpeg,jpg,png|required|max:5000']);

        $user = User::findOrFail($request->user()->id);

        $imageProfileName = $this->userServices->handleUploadedImage($request->file('image'),$user->image);
        if($imageProfileName == NULL){
            return response()->json(['message' => "Upload failed, file not exist"],422);
        }
        $user->update(['image' => $imageProfileName]);
        return response()->json(['message' => "Upload avatar susscessfully"],200);
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
     * Delete the user
     *
     * @bodyParam users string required list id of user. Example: 1,2,3,4,5
     */
    public function destroy(Request $request)
    {
        $this->validate($request,["users" => "required"],["users.required" => "You must choose the user."]);
        $user_arr = explode (",", request("users"));
        $exists = User::whereIn('id', $user_arr)->pluck('id');
        $notExists = collect($user_arr)->diff($exists);
        $idsNotFound = "";
        foreach ($notExists as $key => $value) {
            $idsNotFound .= $value.",";
        }
        if($notExists->isNotEmpty()){
            return response()->json([
                'message'=>'Not found id: '.substr($idsNotFound,0,strlen($idsNotFound)-1)],404);
        }
        User::destroy($exists);
        return response()->json([
           'message'=>'Deleted users successfully']);
    }

}

class UserServices
{
    public function handleUploadedImage($image,$oldImageName)
    {
        if (!is_null($image)) {
            //Delete old image except default image
            if($oldImageName != "avt_default_profile.png"){
                unlink('upload/images/avatars/'.$oldImageName);
            }
            $imageProfileName = 'avatar_'.str_random(12).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/images/avatars'),$imageProfileName);
            return $imageProfileName;
        }
        else{
            return NULL;
        }
    }
}
