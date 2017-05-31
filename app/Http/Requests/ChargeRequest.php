<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChargeRequest extends FormRequest
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

        $this->merge(['is_downloadable' => $this->get('is_downloadable', false)]);

        return [
            'name'        => 'required',
            'description' => 'required',
            'sku'         => 'required|unique:charges,sku,' . $this->get('id'),
            'price'       => 'required|numeric',
            'image'       => 'required_without:has_image|mimes:png',
            'is_downloadable' => 'boolean'

        ];
    }
}
