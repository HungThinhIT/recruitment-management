<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            case ('POST'):
            case ('PUT'):
            {
                return [
                    'name' => 'required|max:255|unique:roles,name,'.$this->id,
                    'permissions'=>'required|array'
                ];
            }
            case 'DELETE': {
                return [
                    'roleId' => 'required|array'
                ];
            }                
            default:
            break;
        }
    }

    public function messages()
    {
        return [
            'name.unique'   => "The name is existed",
        ];
    }

}
