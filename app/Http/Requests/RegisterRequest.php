<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
    }

    public function messages():array
    {
        return[
            'name.required' => 'Nama Harus Diinputkan',
            'email.required' => 'Email Tidak Boleh Kosong',
            'email.email' => 'Pastikan yang Diinputkan Berupa Email',
            'password.required' => 'Password Tidak Boleh Kosong',
            'password.min' => 'Panjang Password Minimal 8 Digit'
        ];
    }
}
