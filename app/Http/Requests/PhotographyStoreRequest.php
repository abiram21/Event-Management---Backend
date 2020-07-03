<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotographyStoreRequest extends FormRequest
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
            // 'stage_size'=>'required|regex:/^[1-9]+[*]+[1-9]+$/',
            // 'min_hour'=>'required|numeric|min:0|lt:max_hour',
            // 'max_hour'=>'required|numeric|min:0',
            'price'=>'required|numeric|min:0',
            'duration'=>'required',
        ];
    }
}
