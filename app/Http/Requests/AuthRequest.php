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
        return [
            'name' => 'required|max:255',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "The name field is required.",
            'name.max'     => "The name is too long",
            'password.required' => "The password is required",
        ];
    }

}
