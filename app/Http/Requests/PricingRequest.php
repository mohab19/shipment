<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PricingRequest extends FormRequest
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
            'city_ar'    => 'required|string|max:50',
            'city_en'    => 'required|string|max:50',
            'price'      => 'required|numeric|min:1',
            'note_ar'    => 'nullable|string',
            'note_en'    => 'nullable|string',
        ];
    }
}
