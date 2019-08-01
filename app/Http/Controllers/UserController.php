<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Http\Requests\CreateUserRequest;
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
    protected $userServices;

    public function __construct()
    {
        $this->userServices = new UserServices;
    }

    /**
     * Display a listing of the user.
     * @bodyParam keyword string keyword want to search (search by username, fullname, phone,address, email, name of role).
     * @bodyParam property string Field in table you want to sort(username, fullname, phone,address, email). Example: username
     * @bodyParam orderby string The order sort (ASC/DESC). Example: asc
     * @bodyParam paginate numeric The count of item you want to paginate.
     */
    public function index(Request $request)
    {
        $this->validate($request,['paginate' => 'numeric']);
        $count = $request->input("paginate")?$request->input("paginate"):0;
        $orderby = $request->input('orderby')? $request->input('orderby'): 'desc';
        if ($count!=0)
        {
            $users = User::with(["roles"])
                        ->SearchByKeyWord($request->input('keyword'))
                        ->sort($request->input('property'),$orderby)
                        ->paginate($count);
        }
        else 
        {
           $users = User::with(["roles"])
                        ->SearchByKeyWord($request->input('keyword'))
                        ->sort($request->input('property'),$orderby)
                        ->get();
        }
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
     * @bodyParam roles array required The list id of the role.
     */
    public function store(CreateUserRequest $request)
    {
        $data = $request->only("name","fullname","email","phone","address","password");
        $data["password"] = Hash::make($data["password"]);
        $user = User::create($data);
        $user->roles()->attach(request('roles'));
        $user->roles;
        return response()->json([
            'message'   =>'Created an user successfully',
            'user'      =>$user]);
    }

    /**
     * Show the profile's information.
     */
    public function showCurrentInfoUser(Request $request)
    {
        $request->user()->roles;
        $request->user()->articles;
        return response()->json($request->user());
    }


    /**
     * Display a user by id.
     */
    public function show($id)
    {
        $user = User::with(["roles","articles"])->findOrFail($id);
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
     * @bodyParam roles array required The string contains role's ID. Example: [1,2]
     */
    public function update(CreateUserRequest $request,$id)
    {
        $user = User::findOrFail($id);
        $user->update($request->only("fullname","email","phone","address"));
        $user->roles()->sync(request('roles'));
        return response()->json([
            'message' => 'Updated user successfully!'
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
     * @bodyParam userId array required list id of user. If you want to delete all, the value of userId = ["all"]. Example: [1,2,3,4,5]
     */
    public function destroy(CreateUserRequest $request)
    {        
        $user_arr = request("userId");
        //if delete all
        if (in_array('all', $user_arr))
        {
                User::where('name','<>','admin')->delete();
                return response()->json([
                    'message'=>'Deleted all users successfully.'],200);
        }
        
        $user = User::whereIn('id',$user_arr)->pluck('name');
        if ($user->contains("admin"))
            return response()->json(['message'=>'The user admin can not be deleted!']);
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
