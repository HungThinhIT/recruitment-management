<?php

namespace App\Http\Controllers;

use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(5);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
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
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $role_arr = explode (",", request("roles"));
        Role::destroy($role_arr);
        return response()->json([
           'message'=>'Deleted roles successfully']);
    }
}
