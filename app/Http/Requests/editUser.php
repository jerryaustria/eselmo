<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editUser extends FormRequest
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
            //
            'name'              => 'required|min:5',
            'email'             =>  'required|email',
            'about_me'          => 'min:5',
            'file'              => 'mimes:jpeg,bmp,png',
        ];
    }
}
