<?php

namespace App\Http\Controllers;

use App\Interviewer;
use Illuminate\Http\Request;

class InterviewerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        $data = $request->only("sort","field","keyword");
        if($request->input("sort") != null && $request->input("field") != null && $request->input("keyword") != null)
        {
            $interviewers = Interviewer::query()->searchAndSort($request)->paginate(10);
            return response()->json($interviewers);
        }
        else if($request->input("keyword") != null)
        {
            $interviewersWithKeyword = Interviewer::query()->searchByKeyword($request)->paginate(10);
            return response()->json($interviewersWithKeyword);
        }
        else if($request->input("field") != null && $request->input("sort") != null)
        {
            $interviewer = Interviewer::orderBy($data["field"],$data["sort"])->paginate(10);
            return response()->json($interviewer);
        }
        else
        {
            return response()->json(Interviewer::paginate(10));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Interviewer $interviewer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Interviewer $interviewer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Interviewer $interviewer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Interviewer $interviewer)
    {
        //
    }
}
