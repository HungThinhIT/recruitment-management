<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name'      => 'required|max:255|unique:users',
            'password'  => 'required|max:255|min:6|confirmed',
            'password_confirmation' => 'required',
            'fullname'  => 'required|max:255',
            'email'     => 'required|email|max:50|unique:users,email,'.$this->id,
            'phone'     => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users,phone,'.$this->id,
            'roles'     => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => "The username field is required.",
            'name.unique'       => "The username has been used.",
            'name.max'          => "The username is too long.",
            'password.required' => "The password field is required.",
            'password_confirmation.required' => "The password_confirmation field is required.",
            'password.confirmed'=> "Your password and confirmed password do not match.",           
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
