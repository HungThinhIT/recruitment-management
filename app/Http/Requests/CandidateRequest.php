<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
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
            case 'PUT':
            case 'POST':
            {
                return[
                    'fullname'      =>'required|max:255',
                    'email'         =>'required|email|max:255',
                    'phone'         =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                    'address'       =>'required|max:255',
                    'technicalSkill'=>'max:255',
                    'CV'            =>'mimes:pdf,doc,docx,jpeg,jpg,png|required|max:5000'
                ];                
            }
            case 'DELETE': {
                return [
                    "candidateId" => "required|array"
                ];
            }
                break;
            default:
                break;
        }
    }
}
