<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            case 'POST':
            {
                return [
                    'name'     => 'required|max:255',
                    'password' => 'required',
                ];
            }
            case 'PUT':
            {
                return [
                    'old_password'             => "required|string|min:3|max:50",
                    'password'                  => "required|string|min:3|max:50|confirmed|different:old_password",
                    'password_confirmation'     => "required|string|min:3|max:50",
                ];
            }
            case 'DELETE':
                break;
            default:
                break;
        }
    }

    public function messages()
    {
        return [
            'name.required'     => "The name field is required.",
            'name.max'          => "The name is too long",
            'password.required' => "The password is required",
        ];
    }

}
