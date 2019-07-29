<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class InterviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
            case 'PUT':
            case 'POST':
            {
                return [
                    "name"            => "required|string|max:255",
                    "timeStart"       => ["required","after:".Carbon::now(),"date","max:255","regex:/[12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]) ([01][0-9]|2[0-3]):[0-5]\d/"],
                    "timeEnd"         => ["required","after:timeStart","date","max:255","regex:/[12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]) ([01][0-9]|2[0-3]):[0-5]\d/"],
                    "address"         => "required|string|max:255",
                    "interviewerId"   => "required|array",
                ];
            }
            case 'DELETE': 
            {
                return [
                    "interviewId" => "required|array"
                ];
            }
                break;
            default:
                break;
        }
    }
}
