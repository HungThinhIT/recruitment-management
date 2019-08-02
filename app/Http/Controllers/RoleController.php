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
     * @bodyParam keyword string keyword want to search (search by name).
     * @bodyParam property string Field in table you want to sort(name, description). Example: name
     * @bodyParam orderby string The order sort (ASC/DESC). Example: asc
     * @bodyParam all string If all=1, return all roles, else return paginate 10 roles/page.
     */
    public function index(Request $request)
    {
        $orderby = $request->input('orderby')? $request->input('orderby'): 'desc';
        if ($request->input("all") == 1)
        {
            $roles = Role::SearchByKeyWord($request->input('keyword'))
                        ->sort($request->input('property'),$orderby)
                        ->get();
        }
        else
        {
            $roles = Role::SearchByKeyWord($request->input('keyword'))
                        ->sort($request->input('property'),$orderby)
                        ->paginate(10);
        } 
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
        $role->permissions;
        return response()->json([
            'message'=>'Created a role successfully',
            'role'=>$role]);
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
     * Show the message for editing the role Admin.
     *
     */
    public function edit($id)
    {
        if (Role::findOrFail($id)->name =="Admin")
            return response()->json(['message'=>'The role Admin can not be updated!']);
    }

    /**
     * Update the role by ID.
     *
     * @bodyParam name string required name of role.
     * @bodyParam permissions array required list id of permission for the role. Example: [1,2,3,4,5]
     */
    public function update(RoleRequest $request, $id)
    {
         $role = Role::findOrFail($id);
        //if the role is admin, it can not be updated
        if ($role->name =="Admin")
            return response()->json(['message'=>'The role Admin can not be updated!']);
        $role->update($request->only("name"));
        $role->permissions()->sync(request("permissions"));
        return response()->json(['message'=>'Updated role successfully']);
    }

    /**
     * Delete the role
     *
     * @bodyParam roleId array required list id of role. If you want to delete all, the value of roleId = ["all"]. Example: [1,2,3,4,5]
     */
    //If the role is admin, it can not be deleted
    public function destroy(RoleRequest $request)
    {
        $role_arr = request("roleId");
        //if delete all
        if (in_array('all', $role_arr))
        {
                Role::where('name','<>','Admin')->delete();
                return response()->json([
                    'message'=>'Deleted all roles successfully.'],200);
        }
        $role = Role::whereIn('id',$role_arr)->pluck('name');
        if ($role->contains("Admin"))
            return response()->json(['message'=>'The role Admin can not be deleted!']);

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
