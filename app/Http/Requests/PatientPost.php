<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


// php artisan make:request PatientPost
class PatientPost extends FormRequest
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
            'firstName' => 'required',
            'lastName' => 'required',
            'department' => 'required',
            'email' => 'required',
            'age' => 'required',
            'position' => 'required',
            'telephone' => 'required',
            'emergency_contact' => 'required',
            'site' => 'required'
        ];
    }
}
