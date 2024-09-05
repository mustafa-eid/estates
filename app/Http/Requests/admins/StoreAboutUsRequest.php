<?php

namespace App\Http\Requests\admins;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutUsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ar_title' => 'required|string|max:255',
            'ar_desc_1' => 'required|string|max:500',
            'ar_desc_2' => 'required|string|max:500',
            'ar_desc_3' => 'required|string|max:500',
            'image_1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    /**
     * Get the custom validation messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'ar_title.required' => 'يجب إدخال العنوان.',
            'ar_title.string' => 'يجب أن يكون العنوان نصًا.',
            'ar_title.max' => 'يجب أن لا يتجاوز العنوان 255 حرفًا.',
            'ar_desc_1.required' => 'يجب إدخال الوصف 1.',
            'ar_desc_1.string' => 'يجب أن يكون الوصف 1 نصًا.',
            'ar_desc_1.max' => 'يجب أن لا يتجاوز الوصف 1 500 حرفًا.',
            'ar_desc_2.required' => 'يجب إدخال الوصف 2.',
            'ar_desc_2.string' => 'يجب أن يكون الوصف 2 نصًا.',
            'ar_desc_2.max' => 'يجب أن لا يتجاوز الوصف 2 500 حرفًا.',
            'ar_desc_3.required' => 'يجب إدخال الوصف 3.',
            'ar_desc_3.string' => 'يجب أن يكون الوصف 3 نصًا.',
            'ar_desc_3.max' => 'يجب أن لا يتجاوز الوصف 3 500 حرفًا.',
            'image_1.required' => 'يجب إدخال الصورة 1.',
            'image_1.image' => 'يجب أن تكون الصورة 1 ملف صورة.',
            'image_1.mimes' => 'يجب أن تكون الصورة 1 من نوع: jpeg، png، jpg، gif.',
            'image_1.max' => 'يجب أن لا تتجاوز الصورة 1 2048 كيلوبايت.',
            'image_2.required' => 'يجب إدخال الصورة 2.',
            'image_2.image' => 'يجب أن تكون الصورة 2 ملف صورة.',
            'image_2.mimes' => 'يجب أن تكون الصورة 2 من نوع: jpeg، png، jpg، gif.',
            'image_2.max' => 'يجب أن لا تتجاوز الصورة 2 2048 كيلوبايت.',
        ];
    }
}
