<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;

/**
 * @group Permission management
 *
 *
 */
class PermissionController extends Controller
{
    /**
     * Display a listing of the permission
     * @Param integer $perpage 
     * 10 rows/request.
     * @bodyParam all string If all=1, return all Permissions, else return paginate 10 Permissions/page.
     */
    public function index(Request $request)
    {
        if ($request->input("all") == 1)
        {
            return response()->json(Permission::all());             
        }
        else
        {
            $perpage = $request->input('perpage')? $request->input('perpage'): 10;
            return response()->json(Permission::paginate($perpage));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
