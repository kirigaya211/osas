<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'organizationName' => 'required|string|max:255',
            'representativeName' => 'required|string|max:255',
            'representativeEmail' => 'required|email|max:255',
            'contactNumber' => 'required|string|max:20',
            'organizationDescription' => 'required|string',
        ];
    }
}
