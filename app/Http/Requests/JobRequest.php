<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            case 'POST' || 'PUT':
            {
                return [
                    "name"        => "required|max:255",
                    "description" => "max:255",
                    "address"     => "required|max:255",
                    "position"    => "required|max:255",
                    "salary"      => "required|max:255",
                    "status"      => "required|max:255",
                    "experience"  => "required|max:255",
                    "amount"      => "required|max:255",
                    "publishedOn" => ["required","date","max:255","regex:/[12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]) ([01][0-9]|2[0-3]):[0-5]\d/"],
                    "deadline"    => "required|date|after:publishedOn|max:255",
                ];
            }
            case 'DELETE': {
                return [
                    "jobId" => "required"
                ];
            }
                break;
            default:
                break;
        }
    }
}
