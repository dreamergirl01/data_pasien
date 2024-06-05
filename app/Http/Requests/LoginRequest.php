<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
    }

    public function messages():array
    {
        return[
            'email.required' => 'Email Harus Diinputkan',
            'email.email' => 'Data yang Diisikan Harus Berupa Email',
            'password.required' => 'Password Harus Diinputkan',
            'password.min' => 'Panjang Password Minimal 8 Digit'
        ];
    }
}
