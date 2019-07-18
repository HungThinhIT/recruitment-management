<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;

use App\Candidate;
use Illuminate\Http\Request;
use App\Http\Requests\CandidateRequest;

/**
 * @group Candidate management
 */
class CandidateController extends Controller
{
    /**
     * Display a listing of the candidate.
     * @bodyParam keyword string keyword want to search.
     * @bodyParam property string Field in table you want to sort(fullname,email,phone,address,cv,status,created_at,updated_at). Example: fullname
     * @bodyParam orderby string The order sort (ASC/DESC). Example: asc
     */
    public function index(Request $request)
    {   
        try{
            if ($request->has("keyword","property","orderby")&& $request->keyword !=null&& $request->property !=null && $request->orderby !=null )
            {
                $data = $request->only("keyword","property","orderby");
                return response()->json(
                        Candidate::where('fullname', 'like', '%'.$data["keyword"].'%')
                                ->orWhere('email', 'like', '%'.$data["keyword"].'%')
                                ->orWhere('phone', 'like', '%'.$data["keyword"].'%')
                                ->orWhere('address', 'like', '%'.$data["keyword"].'%')
                                ->orWhere('technicalSkill', 'like', '%'.$data["keyword"].'%')
                                ->orderBy($data["property"], $data["orderby"])
                                ->with(["jobs","interviews"])
                                ->paginate(10)
                    );
            }     
            else if ($request->has("keyword")&& $request->keyword !=null)
            {
                $data = $request->keyword;
                return response()->json(
                        Candidate::where('fullname', 'like', '%'.$data.'%')
                                ->orWhere('email', 'like', '%'.$data.'%')
                                ->orWhere('phone', 'like', '%'.$data.'%')
                                ->orWhere('address', 'like', '%'.$data.'%')
                                ->orWhere('technicalSkill', 'like', '%'.$data.'%')
                                ->with(["jobs","interviews"])
                                ->paginate(10)
                    );
            }
            else if ($request->has("property","orderby")&& $request->property !=null && $request->orderby !=null )
            {
                $data = $request->only("property","orderby");
                return response()->json(
                    Candidate::orderBy($data["property"], $data["orderby"])
                                ->with(["jobs","interviews"])
                                ->paginate(10)
                );
            }
            else{
                return response()->json(Candidate::with(["jobs","interviews"])->paginate(10));
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
     * Delete the candidate by Id.
     * @bodyParam candidateId array required The id/list id of candidate. Example: [1,2,3,4,5]
     */
    public function destroy(CandidateRequest $request)
    {
        $candidateIds = request("candidateId");
        $exists = Candidate::whereIn('id', $candidateIds)->pluck('id');
        $notExists = collect($candidateIds)->diff($exists);
        $idsNotFound = "";
        foreach ($notExists as $key => $value) {
            $idsNotFound .= $value.",";
        }
        if($notExists->isNotEmpty()){
            return response()->json([
                'message'=>'Not found id: '.substr($idsNotFound,0,strlen($idsNotFound)-1)],404);
        }
        Candidate::destroy($exists);
        return response()->json([
           'message'=>'Deleted the candidate successfully']);
    }

}
