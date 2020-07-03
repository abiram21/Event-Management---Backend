<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SoundStoreRequest extends FormRequest
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
            'place_type'=>'required',
            'stage_size'=>'required|regex:/^[0-9]+[*]+[0-9]+$/',
             'price'=>'required|numeric|min:0'
            
        ];
    }
}
