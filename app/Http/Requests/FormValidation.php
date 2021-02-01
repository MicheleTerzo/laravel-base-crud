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
            'guest_full_name' => 'required|string|min:5',
            'guest_credit_card' => 'required|min:5',
            'room' => 'required|min:1',
            'from_date' => 'required',
            'to_date' => 'required',
            'more_details' => 'nullable|max:255'
        ];
    }
}
