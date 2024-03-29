<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShortEatUpdateRequest extends FormRequest
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
            'type'=>'required|regex:/^[A-Za-z\s]+$/',
            'minQty'=>'required|integer|min:0|lt:maxQty',
            'maxQty'=>'required|integer|min:0',
            'unit_price'=>'required|numeric|min:0'
        ];
    }
}
