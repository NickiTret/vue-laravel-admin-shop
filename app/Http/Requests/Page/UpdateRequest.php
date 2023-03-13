<?php

namespace App\Http\Requests\Page;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name_page' => 'required|string',
            'descr_page' => 'required|string',
            'link_page' => 'required|string',
            'header_title' => 'required|string',
            'image_src' => 'nullable|image',
            'visible' => 'boolean',
        ];
    }
}
