<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientUpdateRequest extends FormRequest
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
            'name'=>'required|regex:/^[A-Za-z.\s]+$/',
            'address'=>'required|string',
            'description'=>'required|string',
            'email'=>'unique:clients|regex:/^.+@.+$/',
            'phoneNo'=>'unique:clients|numeric|digits:9'
        ];
    }
}
