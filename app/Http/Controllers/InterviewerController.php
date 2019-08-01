<?php

namespace App\Http\Controllers;

use App\Interviewer;
use Illuminate\Http\Request;
use App\Http\Requests\InterviewerRequest;

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
     * @bodyParam property string Field in table you want to sort (fullname, email, address, phone, technicalSkill). Example: fullname
     * @bodyParam orderby string The order sort (ASC/DESC). Example: asc
     * @bodyParam all string If all=1, return all, else return paginate 10 interviewers/page.
     */
    public function index(Request $request)
    {
        $orderby = $request->input('orderby')? $request->input('orderby'): 'desc';
        if ($request->input("all") == 1)
        {
            $interviewers = Interviewer::SearchByKeyWord($request->input('keyword'))
                        ->sort($request->input('property'),$orderby)
                        ->get();
        }
        else
        {
            $interviewers = Interviewer::SearchByKeyWord($request->input('keyword'))
                        ->sort($request->input('property'),$orderby)
                        ->paginate(10);
        }
        return response()->json($interviewers);  
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
        Interviewer::create($request->except('image',"created_at","updated_at") + ["image" => $profileImageName]);
        return response()->json(['message' => "Create an interviewer successfully!"],200);
    }

    /**
     * Display an interviewer by Id.
     *
     */
    public function show($interviewerId)
    {
        $interviewer = Interviewer::findOrFail($interviewerId)->with(["interviews"]);
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
     * Remove interviewer by ID/All.
     *
     * @bodyParam interviewerId array required The id/list id of interviewer. Example: [1,2,3,4,5]
     * @bodyParam status string The status for delete all records(status=all). Example: all
     */
    public function destroy(InterviewerRequest $request)
    {
        if($request->has("status")){
            if($request->input("status") == "all"){
                Interviewer::truncate();
                return response()->json([
                    'message'=>'Deleted all interviewers successfully.'],200);
            }
            else{
                return response()->json([
                    'message'=>'The status data is invalid.'],422);
            }
        }
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
