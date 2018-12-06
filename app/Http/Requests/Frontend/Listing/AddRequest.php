<?php

namespace App\Http\Requests\Listing;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


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
            'working_hour' =>['nullable','regex:/^([0-9]{1,2}(-)[0-9]{1,2})$/i'],
            'logo' =>['mimes:jpeg,png','max:1024'],
            'phone' =>['nullable','regex:/^([0-9]{11,13})$/i'],
            'website'=>['nullable','regex:/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i'],
            'founded_at'=>['required','date','date_format:Y-m-d'],
            'email' =>['nullable','email'],
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
            'max'=> ':attribute size Less then 1024KB',
            'founded_at.required'=>'Foundation Date of Business is required!',
            'category_id.required'=>'You must select a Category of Business!'             
        ];
    }
	/*
	public function response(array $errors)
    {
        //This will always return JSON object error messages
        if ($this->ajax() || $this->wantsJson()) {
        		
			return	response()->json($errors, 422);
		}
		
		return $this->redirector->to($this->getRedirectUrl())
                                        ->withInput($this->except($this->dontFlash))
                                        ->withErrors($errors, $this->errorBag);
    }*/
	/*
	protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }*/
	
}