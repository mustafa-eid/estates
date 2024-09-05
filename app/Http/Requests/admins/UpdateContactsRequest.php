<?php

namespace App\Http\Requests\admins;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactsRequest extends FormRequest
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
            'company_name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'required|string|max:500',
            'phone' => 'required|string|max:500',
            'working_hours' => 'required|string|max:500',
            'email' => 'required|string|email|max:500',
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
            'company_name.required' => 'يجب إدخال اسم الشركة.',
            'company_name.string' => 'يجب أن يكون اسم الشركة نصًا.',
            'company_name.max' => 'يجب أن لا يتجاوز اسم الشركة 255 حرفًا.',
            'logo.required' => 'يجب إدخال صورة الشعار.',
            'logo.image' => 'يجب أن تكون الصورة ملف صورة.',
            'logo.mimes' => 'يجب أن تكون الصورة من نوع: jpeg، png، jpg، gif.',
            'logo.max' => 'يجب أن لا تتجاوز الصورة 2048 كيلوبايت.',
            'location.required' => 'يجب إدخال الموقع.',
            'location.string' => 'يجب أن يكون الموقع نصًا.',
            'location.max' => 'يجب أن لا يتجاوز الموقع 500 حرفًا.',
            'phone.required' => 'يجب إدخال رقم الهاتف.',
            'phone.string' => 'يجب أن يكون رقم الهاتف نصًا.',
            'phone.max' => 'يجب أن لا يتجاوز رقم الهاتف 500 حرفًا.',
            'working_hours.required' => 'يجب إدخال ساعات العمل.',
            'working_hours.string' => 'يجب أن تكون ساعات العمل نصًا.',
            'working_hours.max' => 'يجب أن لا تتجاوز ساعات العمل 500 حرفًا.',
            'email.required' => 'يجب إدخال البريد الإلكتروني.',
            'email.string' => 'يجب أن يكون البريد الإلكتروني نصًا.',
            'email.email' => 'يجب أن يكون البريد الإلكتروني صالحًا.',
            'email.max' => 'يجب أن لا يتجاوز البريد الإلكتروني 500 حرفًا.',
        ];
    }
}
