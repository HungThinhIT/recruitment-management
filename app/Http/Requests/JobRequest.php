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
        return [
            "name"        => "required|max:255",
            "description" => "max:255",
            "address"     => "required|max:255",
            "position"    => "required|max:255",
            "salary"      => "required|max:255",
            "status"      => "required|max:255",
            "experience"  => "required|max:255",
            "amount"      => "required|max:255",
            "publishedOn" => "required|max:255",
            "deadline"    => "required|max:255",
        ];
    }
}
