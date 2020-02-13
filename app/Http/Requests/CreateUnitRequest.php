<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUnitRequest extends FormRequest
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
            'Title'              => 'required|min:5',
            'price'             => 'required:required|regex:/^\d+(\.\d{1,2})?$/',
            'Description'=>'required|min:10',
            'Address'           => 'required|min:5',
            'beds'              => 'required',
            'Cities'         => 'required',
            'baths'              => 'required'
        ];
    }
}
