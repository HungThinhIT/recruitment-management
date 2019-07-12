<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'fullname'  => 'required|max:255',
            'email'     => 'required|email|max:50|unique:users,email,'.$this->id,
            'phone'     => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users,phone,'.$this->id,
            'roles'     => 'required',
        ];
    }

    public function messages()
    {
        return [         
            'fullname.required' => "The fullname field is required.",
            'email.required'    => "The email field is required.",
            'email.email'       => "The email is invalid.",
            'email.unique'      => "The email has been used",
            'phone.required'    => "The phone field is required.",
            'phone.unique'      => "The phone has been used.",
            'phone.regex'       => "The phone number is invalid.",
            'roles.required'    => "You must choose the role."
        ];
    }
}
