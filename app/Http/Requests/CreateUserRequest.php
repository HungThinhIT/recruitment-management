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
        switch ($this->method()) {
            case 'PUT':
            {
                return [
                    'fullname'  => 'required|max:255',
                    'email'     => 'required|email|max:50|unique:users,email,'.$this->id,
                    'phone'     => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users,phone,'.$this->id,
                    'roles'     => 'required|array',
                ];
            }
            case 'POST':
            {
                return [
                    'name'      => 'required|max:255|unique:users',
                    'password'  => 'required|max:255|min:6|confirmed',
                    'password_confirmation' => 'required',
                    'fullname'  => 'required|max:255',
                    'email'     => 'required|email|max:50|unique:users,email,'.$this->id,
                    'phone'     => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users,phone,'.$this->id,
                    'roles'     => 'required|array',
                ];
            }
            case 'DELETE': {
                return [
                    "userId" => "required|array"
                ];
            }
                break;
            default:
                break;
        }
        
    }

    public function messages()
    {
        return [
            'name.unique'       => "The username has been used.",
            'password.confirmed'=> "Your password and confirmed password do not match.",           
            'email.email'       => "The email is invalid.",
            'email.unique'      => "The email has been used",
            'phone.unique'      => "The phone has been used.",
            'phone.regex'       => "The phone number is invalid.",
        ];
    }
}
