<?php

namespace App\Http\Controllers;

use App\Interview;
use App\Interviewer;
use Illuminate\Http\Request;
use App\InterviewFilter;
/**
 * @group Interview management
 *
 */
class InterviewController extends Controller
{
    /**
     * Display a listing of the interview.
     * 10 rows/page.
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interview $interview)
    {
        //
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
        $interviewIds = str_replace(array('[',']'),'', $interviewIds );
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
