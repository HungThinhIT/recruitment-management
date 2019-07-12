<?php

namespace App\Http\Controllers;

use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;

/**
 * @group Role management
 *
 *
 */
class RoleController extends Controller
{
    /**
     * Display a listing of the role.
     * 10 rows/request
     *
     */
    public function index()
    {
        $roles = Role::paginate(10);
        return response()->json($roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Create a role.
     *
     * @bodyParam name string required name of role.
     * @bodyParam permissions string required list id of permission for the role. Example: 1,2
     */
    public function store(RoleRequest $request)
    {
        $role = new Role();
        $role->name = request('name');
        $permissions = request('permissions');
        $permission_arr = explode (",", $permissions);
        $role->save();
        foreach ($permission_arr as $permission) {
            $role->permissions()->attach($permission);
        }
        return response()->json([
            'message'=>'Created role successfully']);
    }

    /**
     * Show a role by ID.
     *
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);
        $permissions = $role->permissions;
        return response()->json($role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the role by ID.
     *
     * @bodyParam name string required name of role.
     * @bodyParam permissions string required list id of permission for the role. Example: 1,2,3,4,5
     */
    public function update(RoleRequest $request, $id)
    {
        Role::findOrFail($id)->update($request->only("name"));
        $permission_arr = explode (",", request("permissions"));
        Role::findOrFail($id)->permissions()->sync($permission_arr);
        return response()->json([
           'message'=>'Updated role successfully']);
    }

    /**
     * Delete the role
     *
     * @bodyParam roles string required list id of role. Example: 1,2,3,4,5
     */
    public function destroy(Request $request)
    {
        $this->validate($request,["roles" => "required"],["roles.required" => "You must choose the role."]);
        $role_arr = explode (",", request("roles"));
        $exists = Role::whereIn('id', $role_arr)->pluck('id');
        $notExists = collect($role_arr)->diff($exists);
        $idsNotFound = "";
        foreach ($notExists as $key => $value) {
            $idsNotFound .= $value.",";
        }
        if($notExists->isNotEmpty()){
            return response()->json([
                'message'=>'Not found id: '.substr($idsNotFound,0,strlen($idsNotFound)-1)],404);
        }
        Role::destroy($exists);
        return response()->json([
           'message'=>'Deleted roles successfully']);
    }
}
