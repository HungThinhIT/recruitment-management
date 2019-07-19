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
     */
    public function index(Request $request)
    {        
        try{
            if ($request->keyword !=null&& $request->property !=null && $request->orderby !=null )
            {
                $data = $request->only("keyword","property","orderby");
                return response()->json(
                        Role::where('name', 'like', '%'.$data["keyword"].'%')
                                ->orderBy($data["property"], $data["orderby"])
                                ->paginate(10)
                    );
            }     
            else if ($request->keyword !=null)
            {
                $data = $request->keyword;
                return response()->json(Role::where('name', 'like', '%'.$data.'%')->paginate(10));
            }
            else if ($request->property !=null && $request->orderby !=null )
            {
                $data = $request->only("property","orderby");
                return response()->json(Role::orderBy($data["property"], $data["orderby"])->paginate(10));
            }
            else{
                return response()->json(Role::paginate(10));
            }
        }
        catch(\Illuminate\Database\QueryException $queryEx){
            return response()->json(['message' => $data["property"]." field is not existed"],422);
        }
        catch(\InvalidArgumentException $ex){
            return response()->json(['message' => $data["orderby"]." field is invalid"],422);
        }
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
     * @bodyParam roleId array required list id of role. Example: [1,2,3,4,5]
     */
    //If the role is admin, it can not be deleted
    public function destroy(RoleRequest $request)
    {
        $role_arr = request("roleId");
        $role = Role::where('name',"Admin")->get();
        if ($role!=null)
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
