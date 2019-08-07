<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use DB;
use App\Services\CandidateService;
use App\Candidate;
use Illuminate\Http\Request;
use App\Http\Requests\CandidateRequest;
use App\Events\CandidatePusherEvent;

/**
 * @group Candidate management
 */
class CandidateController extends Controller
{
    protected $candidateService;
    protected $candidateServices;
    public function __construct(CandidateService $candidateService)
    {
        $this->candidateService = $candidateService;
        $this->candidateServices = new CandidateServices;
    }

    /**
     * Display a listing of the candidate.
     * @bodyParam keyword string keyword want to search.
     * @bodyParam property string Field in table you want to sort(fullname,email,phone,address,cv,status,created_at,updated_at). Example: fullname
     * @bodyParam orderby string The order sort (ASC/DESC). Example: asc
    * @bodyParam all string If all=1, return all candidates, else return paginate 10 candidates/page.
     * @Param perpage integer
     */
    public function index(Request $request)
    {   
        $orderby = $request->input('orderby')? $request->input('orderby'): 'desc';
        if ($request->input("all") == 1)
        {
            $candidates = Candidate::with(["jobs","interviews"])
                        ->SearchByKeyWord($request->input('keyword'))
                        ->sort($request->input('property'),$orderby)
                        ->get();
        }
        else
        {
            $perpage = $request->input('perpage')? $request->input('perpage'): 10;
            $candidates = Candidate::with(["jobs","interviews"])
                        ->SearchByKeyWord($request->input('keyword'))
                        ->sort($request->input('property'),$orderby)
                        ->paginate($perpage);
        }        
        return response()->json($candidates);
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
     * Store a candidate.
     *
     * @bodyParam fullname string required The full name of the candidate.
     * @bodyParam email string required The email of the candidate.
     * @bodyParam phone string required The phone of the candidate.
     * @bodyParam address string required The address of the candidate.
     * @bodyParam description string The description of the candidate.
     * @bodyParam technicalSkill string  The technicalSkill of the candidate. Example: NodeJs-2, PHP-1
     * @bodyParam jobId numeric required The job that the candidate apply.
     * @bodyParam file file The resume of the candidate.
     */
    public function store(CandidateRequest $request)
    {
        //validate type file
        if ($request->file("file"))
        {
            $file = $request->file("file");
            $extensions = $file->getClientOriginalExtension();
            if($extensions != 'png'
                and $extensions != 'jpeg'
                and $extensions != 'jpg'
                and $extensions != 'pdf'
                and $extensions != 'doc'
                and $extensions != 'docx'
            ){
                return response()->json(['message'=>'The type file support is: png, jpeg, jpg, pdf, doc, docx'],422);
            }
        }
        //check by email if candidate is existed
        $candidate = Candidate::where('email','=',$request["email"])->first();
        if ($candidate!=null)
        {
            //update old candidate
            //upload new CV
             $fileName = $this->candidateServices->handleUploadNewCV($request->file('file'));
            //if ($fileName == NULL) $filename='';
            $candidate->update($request->except("file","created_at","updated_at")
                            +["CV"=> $fileName]
                            +["status"=>1]);
            $candidate->jobs()->attach($request->input("jobId"));

            event(new CandidatePusherEvent($candidate));
            return response()->json(['message'=>'Updated a candidate successfully'],200);
        }
        //if candidate is not existed in database
        else
        {
            //upload CV
            $fileName = $this->candidateServices->handleUploadNewCV($request->file('file'));
            
            $candidate = Candidate::create($request->except("file","created_at","updated_at")
                            +["CV"=> $fileName]
                            +["status"=>1]);
            $candidate->jobs()->attach($request->input("jobId"));
            return response()->json(['message'=>'Created a candidate successfully'],200);
        }       
    }

    /**
     * Show a candidate by ID
     */
    public function show($candidateID)
    {
        $candidate = Candidate::with(["interviews","jobs"])->findOrFail($candidateID);
        //solve technical skill data
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
        //solve status data
        switch ($candidate->status) {
            case '1':
                $status = "Pending";
                break;
            case '2':
                $status = "Deny";
                break;
            case '3':
                $status = "Approve Application";
            break;
            case '4':
                $status = "Passed";
            break;
            case '5':
                $status = "Failed";
            break;
            default:
                break;
        }
        $candidate->status = $status;
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
     * Update status of candidate.
     *
     * @bodyParam candidateId numeric required The Id of candidate.
     * @bodyParam status string required The email of the candidate.
     */
    public function updateStatus(Request $request){
        $this->validate($request,[
            "candidateId" => "required|exists:candidates,id",
            "status" => "required|string"
        ]);

        $numberStatus = $this->candidateService->convertStringStatusToNumber($request->input("status"));
        if($numberStatus == NULL)
            return response()->json(["message" => "Invalid status!"],422);
        Candidate::findOrFail($request->input("candidateId"))->update(["status" => $numberStatus]);
        return response()->json(["message" => "Updated status of candidate successfully!"],200);
    }
    /**
     * Delete the candidate by Id.
     * @bodyParam candidateId array required The id/list id of candidate. If you want to delete all, the value of candidateId = ["all"]. Example: [1,2,3,4,5]
     */
    public function destroy(CandidateRequest $request)
    {
        $candidateIds = request("candidateId");
        //if delete all
        if (in_array('all', $candidateIds))
        {
                DB::table('candidates')->delete();
                return response()->json([
                    'message'=>'Deleted all candidates successfully.'],200);
        }
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
class CandidateServices
{
    public function handleUploadNewCV($file)
    {
        if (!is_null($file)) {
            $fileName = 'CV_'.now()->year.'_'.str_random(5).'-enclave_'.$file->getClientOriginalName();
            $file->move(public_path('upload/CV'),$fileName);
            return $fileName;
        }
        else{
            return '';
        }
    }
}
