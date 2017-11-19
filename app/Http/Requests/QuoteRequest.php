<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|digits_between:8,15|nullable',
            'what_project' => 'required|alpha',
            'website' => 'required|url',
            'pages' => 'required|integer',
            'your_budget' => 'required',
            'description' => 'required',
            'functionality' => 'required',
            'website_list' => 'required'

        ];
    }
}
