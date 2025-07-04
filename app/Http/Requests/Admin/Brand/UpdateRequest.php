<?php

namespace App\Http\Requests\Admin\Brand;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'        => ['required', 'string', 'max:255'],
            'designation' => ['nullable', 'string', 'max:255'],
            'company'     => ['nullable', 'string', 'max:255'],
            'is_featured' => ['nullable'],
            'url' => ['nullable'],
            'message'     => ['nullable', 'string', 'max:255'],
            'avatar'      => ['nullable', 'file', 'max:500', 'mimes:jpeg,jpg,png,gif'],
        ];
    }
}
