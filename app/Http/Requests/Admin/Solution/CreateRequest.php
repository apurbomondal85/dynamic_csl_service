<?php

namespace App\Http\Requests\Admin\Solution;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'category'          => ['nullable', 'string', 'max:255'],
            'name'              => ['required', 'string', 'max:255'],
            'url'               => ['nullable', 'url', 'max:255'],
            'date'              => ['nullable', 'date'],
            'is_featured'       => ['nullable'],
            'description_title'       => ['nullable'],
            'short_description' => ['nullable', 'string', 'max:1000'],
            'description'       => ['nullable', 'string'],
            'color'       => ['nullable', 'string'],
            'featured_image'    => ['required', 'file', 'max:500', 'mimes:jpeg,jpg,png,gif'],
            'banner_image'    => ['required', 'file', 'max:500', 'mimes:jpeg,jpg,png,gif'],

            'file_name.*' => ['nullable', 'required_with:images'],
            'images.*'    => ['nullable', 'file', 'max:500', 'mimes:jpeg,jpg,png,gif', 'required_with:file_name'],
        ];
    }
}
