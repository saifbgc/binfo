<?php

namespace App\Http\Requests\Listing;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;


class AddRequest extends FormRequest
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
            'name'           => ['required', 'string', 'max:100'],
            'category_id'    => ['required'],
            'working_hour' =>['regex:/^[0-9]{1,2}(-)[0-9]{1,2}$/i'],
            'logo' =>['mimes:jpeg,png','max:1024']
            
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
           'required' => 'The :attribute field is required.',
            'mimes' => ':attribute Only jpeg, png are allowed.',
            'max'=> ':attribute size Less then 1024KB'            
        ];
    }
}