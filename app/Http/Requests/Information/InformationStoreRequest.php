<?php

namespace App\Http\Requests\Information;

use App\Helper\Helper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class InformationStoreRequest extends FormRequest
{
    public function rules(): array
    {
        $rules = [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:'.env('IMAGE_UPLOAD_SIZE'),
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'short_description' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:65535',
            'availability' => 'required|in:available,inavailable'
        ];
        return $rules;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            Helper::res_json('Validation failed', $validator->errors(), 422)
        );
    }
}