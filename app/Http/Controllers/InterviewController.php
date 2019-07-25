<?php

namespace App\Http\Controllers;

use App\Interview;
use App\Interviewer;
use Illuminate\Http\Request;
use App\Http\Requests\InterviewRequest;
use DB;
use App\InterviewFilter;
/**
 * @group Interview management
 *
 */
class InterviewController extends Controller
{
    /**
     * Display a listing of the interview.
     * 10 rows/page. <br>
     * Address code{ <br>
     *  2-1 => "Floor 2 - 453-455 Hoang Dieu Str" | <br>
     *  3-1 => "Floor 3 - 453-455 Hoang Dieu Str" | <br>
     *  4-1 => "Floor 4 - 453-455 Hoang Dieu Str" | <br>
     *  5-1 => "Floor 5 - 453-455 Hoang Dieu Str" | <br>
     * <br>
     *  2-2 => "Floor 2 - 117 Nguyen Huu Tho Str" | <br>
     *  3-2 => "Floor 3 - 117 Nguyen Huu Tho Str" | <br>
     *  4-2 => "Floor 4 - 117 Nguyen Huu Tho Str" | <br>
     *  5-2 => "Floor 5 - 117 Nguyen Huu Tho Str" <br>}
     *
     * @bodyParam name string Interview's name want to search.
     * @bodyParam address string Interview's address want to filter(2-1,2-2,...). Example: 2-1
     * @bodyParam status numeric The status of interview [Pending(1)/Opening(2)/Closed(3)]. Example: 1
     * @bodyParam sort_name string The param if you want to sort by name = asc/desc (Ex:sort_name="desc"). Example: desc
     * @bodyParam sort_address string The param if you want to sort by address = asc/desc (Ex:sort_address="desc"). Example: desc
     * @bodyParam sort_timestart string The param if you want to sort by timestart = asc/desc (Ex:sort_timestart="desc"). Example: desc
     */
    public function index(Request $request, InterviewFilter $filter)
    {
        if($request->has("address")){
            $addressValid = $this->convertNumberAddressToString($request->input("address"));
            if(!$addressValid)
                return response()->json(['message' => "Address field is invalid!"],422);
        }

        $interviewActive = Interview::filter($filter)->paginate(10);

        $interviewActive->map(function($interview) {
                $interview->status = $this->convertStatusCodeToString($interview->status);
                $interview->address = $this->convertNumberAddressToString($interview->address);
                $interview->interviewerId = $this->convertInterviewerIdToName($interview->interviewerId);
                return $interview;
        });
        return response()->json($interviewActive);
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
     * Create an interview.
     *
     * Address code{ <br>
     *  2-1 => "Floor 2 - 453-455 Hoang Dieu Str" | <br>
     *  3-1 => "Floor 3 - 453-455 Hoang Dieu Str" | <br>
     *  4-1 => "Floor 4 - 453-455 Hoang Dieu Str" | <br>
     *  5-1 => "Floor 5 - 453-455 Hoang Dieu Str" | <br>
     * <br>
     *  2-2 => "Floor 2 - 117 Nguyen Huu Tho Str" | <br>
     *  3-2 => "Floor 3 - 117 Nguyen Huu Tho Str" | <br>
     *  4-2 => "Floor 4 - 117 Nguyen Huu Tho Str" | <br>
     *  5-2 => "Floor 5 - 117 Nguyen Huu Tho Str" <br>}
     *
     * @bodyParam name string  required The name of interview. Example: Internship summer 2019
     * @bodyParam address string The required address of interview(Ex: 2-1). Example: 2-1
     * @bodyParam timeStart datetime required The time of interview(Ex: "2019-07-25 10:30:20" - yyyy-mm-dd H:i"s). Example: 2019-07-25 10:30:20
     * @bodyParam candidateId array The candidate of interview (Ex: [1,2,3]). Example: [1,2,3]
     * @bodyParam interviewId array required The interviewer of interview(Ex: [1,2,3] -> The array id of interviewer). Example: [1,2,3]
     */

    public function store(InterviewRequest $request)
    {
        if($request->has("address")){
            $addressValid = $this->convertNumberAddressToString($request->input("address"));
            if(!$addressValid)
                return response()->json(['message' => "Address field is invalid!"],422);
        }
        $timeSelected = $request->input("timeStart");
        //Check if any candidates had an interview other, It will return error with that name candidate and 422 status code
        if($request->has("candidateId")){
            $candidatesBusy = $this->checkCandidatesIsNotAvailable($request->input("candidateId"), $timeSelected);
            if($candidatesBusy != NULL){
                return response()->json(["message" => $candidatesBusy." had an interview at the same time"],422);
            }
        }
        //Check if any interviewer had an interview, It will return error with 422 status code
        $isInterviewerBusy = $this->checkInterviewersIsNotAvailable($request->input("interviewerId"), $timeSelected);
        if($isInterviewerBusy) {
            return response()->json(["message" => "Some interviewer had an interview at the same time"],422);
        }

        Interview::create($request->except(["interviewerId", "status", "created_at", "updated_at"])
            + ["interviewerId" => implode(",",$request->input("interviewerId"))])
            ->candidates()->attach($request->input("candidateId"));
        return response()->json(["message" => "Created ".$request->input("name") ." successfully!"],200);
    }

    /**
     * Display an interview by Id
     *
     */
    public function show($interviewId)
    {
        $interview = Interview::with(["candidates"])->findOrFail($interviewId);
        return response()->json($interview);
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

    private function convertNumberAddressToString($numberAddresses)
    {
        $address = NULL;
        switch ($numberAddresses){
            case "2-1":
                return $address =  "Floor 2 - 453-455 Hoang Dieu Str";
                break;
            case "3-1":
                return $address =  "Floor 3 - 453-455 Hoang Dieu Str";
                break;
            case "4-1":
                return $address =  "Floor 4 - 453-455 Hoang Dieu Str";
                break;
            case "5-1":
                return $address =  "Floor 5 - 453-455 Hoang Dieu Str";
                break;
            case "2-2":
                return $address =  "Floor 2 - 117 Nguyen Huu Tho Str";
                break;
            case "3-2":
                return $address =  "Floor 3 - 117 Nguyen Huu Tho Str";
                break;
            case "4-2":
                return $address =  "Floor 4 - 117 Nguyen Huu Tho Str";
                break;
            case "5-2":
                return $address =  "Floor 5 - 117 Nguyen Huu Tho Str";
                break;
            default:
                break;
        }
    }

    private function convertInterviewerIdToName($interviewIds){
        $interviewIds = explode(",",$interviewIds);
        $interviewerNames = Interviewer::WhereIn("id", $interviewIds)->pluck("fullname");
        return $interviewerNames;
    }

    private function convertStatusCodeToString($statusCode){
        /*
         * Status_code = 1 => Pending
         * Status_code = 2 => Opening
         * Status_code = 3 => Closed
         */
        $status = NULL;
        switch ((int)$statusCode){
            case 1 :
                return $status = "Pending";
                break;
            case 2 :
                return $status = "Opening";
                break;
            case 3 :
                return $status = "Closed";
                break;
            default :
                return $status = "Undefined";
                break;
        }
    }
}
