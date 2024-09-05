<?php

namespace App\Http\Requests\admins;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInfoRequest extends FormRequest
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
            'video' => 'nullable|mimes:mp4,avi,mkv|max:20480',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ar_description' => 'required|string|max:500',
            'ar_additional_description' => 'required|string|max:500',
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
            'video.required' => 'يجب إدخال الفيديو.',
            'video.mimes' => 'يجب أن يكون الفيديو من نوع: mp4، avi، mkv.',
            'video.max' => 'يجب أن لا يتجاوز حجم الفيديو 20 ميجابايت.',
            'image1.required' => 'يجب إدخال الصورة الأولى.',
            'image1.image' => 'يجب أن تكون الصورة الأولى ملف صورة.',
            'image1.mimes' => 'يجب أن تكون الصورة الأولى من نوع: jpeg، png، jpg، gif.',
            'image1.max' => 'يجب أن لا تتجاوز الصورة الأولى 2048 كيلوبايت.',
            'image2.required' => 'يجب إدخال الصورة الثانية.',
            'image2.image' => 'يجب أن تكون الصورة الثانية ملف صورة.',
            'image2.mimes' => 'يجب أن تكون الصورة الثانية من نوع: jpeg، png، jpg، gif.',
            'image2.max' => 'يجب أن لا تتجاوز الصورة الثانية 2048 كيلوبايت.',
            'ar_description.required' => 'يجب إدخال الوصف 1.',
            'ar_description.string' => 'يجب أن يكون الوصف 1 نصًا.',
            'ar_description.max' => 'يجب أن لا يتجاوز الوصف 1 500 حرفًا.',
            'ar_additional_description.required' => 'يجب إدخال الوصف 2.',
            'ar_additional_description.string' => 'يجب أن يكون الوصف 2 نصًا.',
            'ar_additional_description.max' => 'يجب أن لا يتجاوز الوصف 2 500 حرفًا.',
        ];
    }
}
