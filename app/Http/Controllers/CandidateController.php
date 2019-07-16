<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;

use App\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
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
     * Show a candidate by ID
     */
    public function show($candidateID)
    {
        $candidate = Candidate::with(["interviews","jobs"])->findOrFail($candidateID);
        $technical_arr = explode(",",$candidate->technicalSkill);
        $technicalSkill =  new Collection();
        foreach ($technical_arr as $key => $technical) {
            $tech = explode("-",$technical);
            $technicalSkill ->push([
                "name"=>$tech[0],
                "year"=>$tech[1]
            ]);
        }
        $candidate->technicalSkill = $technicalSkill;
        return response()->json($candidate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
