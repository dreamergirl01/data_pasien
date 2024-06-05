<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePasienRequest extends FormRequest
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
            'nik' => 'required',
            'nama_pasien' => 'required|string',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'foto' => 'required|mimes:png,jpg',
            'status' => 'required'
        ];
    }

    public function messages():array
    {
        return[
            'nik.required' => 'Data Harus Diinputkan',
            'foto.mimes' => 'Foto Haraus Dalam Bentuk jpg,png',
        ];
    }
}
