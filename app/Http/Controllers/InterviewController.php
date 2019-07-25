<?php

namespace App\Http\Controllers;

use App\Interview;
use Illuminate\Http\Request;
use App\Http\Requests\InterviewRequest;
use DB;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function show(Interview $interview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function edit(Interview $interview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interview $interview)
    {
        //
    }

    /**
     * Delete the interview
     * @bodyParam interviewId array required The id/list id of interview. If you want to delete all, the value of interviewId = ["all"]. Example: [1,2,3,4,5]
     */
    public function destroy(InterviewRequest $request)
    {
        $interviewIds = request("interviewId");
        //if delete all
        if (in_array('all', $interviewIds))
        {
                DB::table('interviews')->delete();
                return response()->json([
                    'message'=>'Deleted all interviews successfully.'],200);
        }
        $exists = Interview::whereIn('id', $interviewIds)->pluck('id');
        $notExists = collect($interviewIds)->diff($exists);
        $idsNotFound = "";
        foreach ($notExists as $key => $value) {
            $idsNotFound .= $value.",";
        }
        if($notExists->isNotEmpty()){
            return response()->json([
                'message'=>'Not found id: '.substr($idsNotFound,0,strlen($idsNotFound)-1)],404);
        }
        Interview::destroy($exists);
        return response()->json([
           'message'=>'Deleted the interviews successfully']);
    }
}
