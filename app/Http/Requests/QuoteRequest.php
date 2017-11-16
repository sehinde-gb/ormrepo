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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'what_project' => 'required|alpha',
            'website' => 'required|alpha',
            'pages' => 'required|integer',
            'your_budget' => 'required|integer',
            'description' => 'required|alphanumeric',
            'functionality' => 'required|alphanumeric',
            'website_list' => 'required|alpha'

        ];
    }
}
