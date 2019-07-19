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
     * @bodyParam image file required The image of the interviewer (png,peg,jpg,png).
     */
    public function store(InterviewerRequest $request)
    {
        $profileImageName = $this->interviewerService->handleUploadedImage($request->file("image"),null);
        Interviewer::create($request->except('image') + ["image" => $profileImageName]);
        return response()->json(['message' => "Create an interviewer successfully!"],200);
    }

    /**
     * Display an interviewer by Id.
     *
     */
    public function show($interviewerId)
    {
        $interviewer = Interviewer::findOrFail($interviewerId);
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

class InterviewerService{

    public function handleUploadedImage($image,$oldImageName)
    {
        if (!is_null($image)) {

            if($oldImageName == null){
                $imageProfileName = 'avatar_'.str_random(12).'.'.$image->getClientOriginalExtension();
                $image->move(public_path('upload/interviewer/avatars'),$imageProfileName);
                return $imageProfileName;
            }
            //Delete old image except default image
            if($oldImageName != "avt_interviewer_default.png"){
                unlink('upload/interviewer/avatars/'.$oldImageName);
                $imageProfileName = 'avatar_'.str_random(12).'.'.$image->getClientOriginalExtension();
                $image->move(public_path('upload/interviewer/avatars'),$imageProfileName);
                return $imageProfileName;
            }
        }
        else{
            return "avt_interviewer_default.png";
        }
    }
}
