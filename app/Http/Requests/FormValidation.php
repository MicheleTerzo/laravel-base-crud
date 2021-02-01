<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidation extends FormRequest
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
            'full-name' => 'required|string|min:2',
            'credit-card-number' => 'required|min:5|integer',
            'room' => 'required|min:1',
            'from' => 'required',
            'to' => 'required',
            'details' => 'nullable|max:255'
        ];
    }
}
