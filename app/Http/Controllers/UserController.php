<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use App\Role;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
/**
 * @group User management
 *
 *
 */
class UserController extends Controller
{
    /**
     * Display a listing of the user.
     * @bodyParam keyword string keyword want to search (search by username, fullname, phone,address, email, name of role).
     * @bodyParam property string Field in table you want to sort(username, fullname, phone,address, email). Example: username
     * @bodyParam orderby string The order sort (ASC/DESC). Example: asc
     */
    public function index(Request $request)
    {        
        try{
            if ($request->keyword !=null&& $request->property !=null && $request->orderby !=null )
            {
                $data = $request->only("keyword","property","orderby");
                return response()->json(
                        User::where('name', 'like', '%'.$data["keyword"].'%')
                                ->orwhere('fullname', 'like', '%'.$data["keyword"].'%')
                                ->orwhere('email', 'like', '%'.$data["keyword"].'%')
                                ->orwhere('phone', 'like', '%'.$data["keyword"].'%')
                                ->orwhere('address', 'like', '%'.$data["keyword"].'%')
                                ->orWhereHas('roles', function (Builder $query) use ($data){
                                    $query->where('name', 'like', '%'.$data["keyword"].'%');
                                })
                                ->orderBy($data["property"], $data["orderby"])
                                ->with(["roles:name"])
                                ->paginate(10)
                    );
            }     
            else if ($request->keyword !=null)
            {
                $data = $request->keyword;
                return response()->json(
                        User::where('name', 'like', '%'.$data.'%')
                                ->orwhere('fullname', 'like', '%'.$data.'%')
                                ->orwhere('email', 'like', '%'.$data.'%')
                                ->orwhere('phone', 'like', '%'.$data.'%')
                                ->orwhere('address', 'like', '%'.$data.'%')
                                ->orWhereHas('roles', function (Builder $query) use ($data) {
                                    $query->where('name', 'like', '%'.$data.'%');
                                })
                                ->with(["roles:name"])
                                ->paginate(10));    
            }
            else if ($request->property !=null && $request->orderby !=null )
            {
                $data = $request->only("property","orderby");
                return response()->json(User::orderBy($data["property"], $data["orderby"])
                                ->with(["roles:name"])
                                ->paginate(10));
            }
            else{
                return response()->json(User::with(["roles:name"])->paginate(10));
            }
        }
        catch(\Illuminate\Database\QueryException $queryEx){
            return response()->json(['message' => $data["property"]." field is not existed"],422);
        }
        catch(\InvalidArgumentException $ex){
            return response()->json(['message' => $data["orderby"]." field is invalid"],422);
        }
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
