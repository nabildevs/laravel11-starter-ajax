<?php

namespace App\Http\Requests\Setting;

use App\Helper\Helper;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SettingUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        $rules = [
            'business_name' => 'nullable|string|max:255',
            'business_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:' . env('IMAGE_UPLOAD_SIZE'),
            'business_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:' . env('IMAGE_UPLOAD_SIZE'),
            'business_address' => 'nullable|string',
            'business_phone' => 'nullable|string',
            'business_email' => 'nullable|email|max:255',
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
