<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChairUpdateRequest extends FormRequest
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
            'type' => 'required|integer|min:0',
            'minQty' => 'required|integer|min:0|lt:maxQty',
            'maxQty' => 'required|integer|min:0',
            'price_per_coveredchair'=> 'required|numeric|min:0',
            'price_per_uncoveredchair' => 'required|numeric|min:0'

        ];
    }
}
