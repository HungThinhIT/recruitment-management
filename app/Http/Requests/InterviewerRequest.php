<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InterviewerRequest extends FormRequest
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
                    "fullname"        => "required|regex:/^(?![\s.]+$)[a-zA-Z\s.]*$/|max:50",
                    "email"           => "required|email|max:255|unique:interviewers,email,".(int)$this->route()->id,
                    "phone"           => "required||max:255|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:interviewers,phone,".(int)$this->route()->id,
                    "address"         => "max:255",
                    "technicalSkill"  => "required|max:255",
                    "image"           => "mimes:jpeg,jpg,png|max:5000",
                ];
            }
            case 'DELETE':
            {
                return [
                    "interviewerId"   => "required_without:status|array",
                    "status"          => "required_without:interviewerId|string",
                ];
            }
                break;
            default:
                break;
        }
    }
}
