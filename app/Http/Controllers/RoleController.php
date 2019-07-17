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
     * @bodyParam permissions array required list id of permission for the role. Example: [1,2]
     */
    public function store(RoleRequest $request)
    {
        $role = new Role();
        $role->name = request('name');
        $role->save();
        $role->permissions()->attach(request('permissions'));
        return response()->json([
            'message'=>'Created a role successfully']);
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
     * @bodyParam permissions array required list id of permission for the role. Example: [1,2,3,4,5]
     */
    public function update(RoleRequest $request, $id)
    {
        Role::findOrFail($id)->update($request->only("name"));
        Role::findOrFail($id)->permissions()->sync(request("permissions"));
        return response()->json([
           'message'=>'Updated role successfully']);
    }

    /**
     * Delete the role
     *
     * @bodyParam roleId array required list id of role. Example: [1,2,3,4,5]
     */
    public function destroy(RoleRequest $request)
    {
        $role_arr = request("roleId");
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
