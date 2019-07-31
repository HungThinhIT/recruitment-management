<?php

namespace App\Http\Controllers;

use App\Interviewer;
use Illuminate\Http\Request;
use App\Http\Requests\InterviewerRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

/**
 * @group Interviewer management
 *
 */
class InterviewerController extends Controller
{
    protected $interviewerService;

    public function __construct()
    {
        $this->interviewerService = new InterviewerService();
    }

    /**
     * Display a listing of the resource.
     * @bodyParam keyword string keyword want to search (search by fullname, email, address, phone, technicalSkill of interviewer).
     * @bodyParam field string Field in table you want to sort (fullname, email, address, phone, technicalSkill). Example: fullname
     * @bodyParam sort string The order sort (ASC/DESC). Example: asc
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
     * Create an interviewer
     * @bodyParam fullname string required The full name of the interviewer.
     * @bodyParam email email required The email of the interviewer.
     * @bodyParam phone phone required The phone number of the interviewer.
     * @bodyParam address string The address of the interviewer.
     * @bodyParam technicalSkill string required The technical skill of the interviewer.
     * @bodyParam image file The image of the interviewer (png,peg,jpg,png).
     */
    public function store(InterviewerRequest $request)
    {
        $profileImageName = $this->interviewerService->handleNewUploadedImage($request->file("image"));
        $interviewer = Interviewer::create($request->except('image',"created_at","updated_at") + ["image" => $profileImageName]);
        $technical_arr = explode(",",$interviewer->technicalSkill);
        $technicalSkill =  new Collection();
        foreach ($technical_arr as $key => $technical) {
            $tech = explode("-",$technical);
            $technicalSkill ->push([
                "name"=>$tech[0],
                "year"=>$tech[1]
            ]);
        }
        $interviewer->technicalSkill = $technicalSkill;
        return response()->json(['message' => "Create an interviewer successfully!",
                                'interviewer'=>$interviewer],200);
    }

    /**
     * Display an interviewer by Id.
     *
     */
    public function show($interviewerId)
    {
        $interviewer = Interviewer::with(["interviews"])->findOrFail($interviewerId);
        $technical_arr = explode(",",$interviewer->technicalSkill);
        $technicalSkill =  new Collection();
        foreach ($technical_arr as $key => $technical) {
            $tech = explode("-",$technical);
            $technicalSkill ->push([
                "name"=>$tech[0],
                "year"=>$tech[1]
            ]);
        }
        $interviewer->technicalSkill = $technicalSkill;
        return response()->json($interviewer,200);
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
     * Update an interviewer by Id.
     *
     * @bodyParam fullname string required The full name of the interviewer.
     * @bodyParam email email required The email of the interviewer.
     * @bodyParam phone phone required The phone number of the interviewer.
     * @bodyParam address string The address of the interviewer.
     * @bodyParam technicalSkill string required The technical skill of the interviewer.
     * @bodyParam image file The image of the interviewer (png,peg,jpg,png).
     */
    public function update(InterviewerRequest $request, $idInterviewer)
    {
        $interviewerActive = Interviewer::findOrFail($idInterviewer);
        $interviewerActive->update($request->except("created_at","updated_at"));
        return response()->json(['message' => "Updated an interviewer successfully!"],200);
    }

    /**
     * Update avatar for interviewer by Id.
     *
     * @bodyParam interviewerId numeric required The id of the interviewer.
     * @bodyParam image file required The image of the interviewer (png,peg,jpg,png).
     */
    public function updateNewAvatar(Request $request){
        $this->validate($request,
            [   'interviewerId' => "required","exists:interviewers,id",
                'image' => 'mimes:jpeg,jpg,png|required|max:5000']);

        $interviewerActive = Interviewer::findOrFail($request->input("interviewerId"));
        $profileImageName = $this->interviewerService->handleUpdatedImage($request->file("image"),$interviewerActive->image);
        $interviewerActive->update($request->except("created_at","updated_at") + ["image" => $profileImageName]);
        return response()->json(['message' => "Updated avatar for ".$interviewerActive->fullname." successfully!"],200);
    }

    /**
     * Remove interviewer by ID/All.	     * Remove interviewer by ID/All.
     *	     *
     * If you want to delete all, { <br>
     * interviewerId : [0]
     * status: "all" <br>}<br>
     * And else, { <br>
     * interviewerId : [1,2,3,...]
     * status: "none" <br>}<br>
     *
     * @bodyParam interviewerId array required The id/list id of interviewer. Example: [1,2,3,4,5]
     * @bodyParam status string The status for delete all records(status=all/none). Example: none
     */
    public function destroy(InterviewerRequest $request)
    {
        $interviewerId = $request->input("interviewerId");
        if($request->has("status") && $request->has("interviewerId")){
            if($request->input("status") == "all" && $interviewerId[0] == 0){
                DB::table('interviewers')->delete();
                return response()->json([
                    'message'=>'Deleted all interviewers successfully.'],200);
            }
            if($interviewerId[0] != 0 && $request->input("status") == "none"){
                $interviewerId = $request->input("interviewerId");
                $exists = Interviewer::whereIn('id', $interviewerId)->pluck('id');
                $notExists = collect($interviewerId)->diff($exists);
                //Get list id not found from array to var.
                $idsNotFound = "";
                foreach ($notExists as $key => $value) {
                    $idsNotFound .= $value.",";
                }
                if($notExists->isNotEmpty()){
                    return response()->json([
                        'message'=>'Not found id: '.substr($idsNotFound,0,strlen($idsNotFound)-1)],404);
                }
                Interviewer::whereIn('id', $interviewerId)->delete();
                return response()->json([
                    'message'=>'Deleted interviewer successfully.'],200);
            }
            else{
                return response()->json([
                    'message'=>'The data is invalid.'],422);
            }
        }
    }
}

class InterviewerService{

    public function handleNewUploadedImage($image)
    {
        if (!is_null($image)) {
            $imageProfileName = 'avatar_'.str_random(12).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/interviewer/avatars'),$imageProfileName);
            return $imageProfileName;
        }
        else{
            return "avt_interviewer_default.png";
        }
    }

    public function handleUpdatedImage($image,$oldImageName)
    {
        if (!is_null($image)) {
            unlink('upload/interviewer/avatars/' . $oldImageName);
            $imageProfileName = 'avatar_' . str_random(12) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/interviewer/avatars'), $imageProfileName);
            return $imageProfileName;
        }
    }
}
