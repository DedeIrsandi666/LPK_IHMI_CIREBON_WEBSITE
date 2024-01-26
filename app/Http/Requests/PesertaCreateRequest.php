<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PesertaCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'foto' => 'required',
            'nama'=> 'required|max:100',
            'alamat'=>'required|max:100',
            'email'=>'required|max:100|unique',
            'password'=>'required|max:100',
            'angkatan'=>'required|max:100',
        ];
    }

    public function attributes()
    {
        return [
            'foto' => 'Foto',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'password' => 'Password',
            'angkatan' => 'Angkatan',
        ];
    }

    public function messages()
    {
        return [
            'foto.required' => 'Foto wajib diisi',
            'nama.required' => 'Nama wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email tidak boleh sama',
            'password.required' => 'Password wajib diisi',
            'angkatan.required' => 'Angkatan wajib diisi',
            'nama.max' => 'Nama maksimal :max karakter',
            'alamat.max' => 'Alamat maksimal :max karakter',
            'email.max' => 'Email maksimal :max karakter',
            'password.max' => 'Password maksimal :max karakter',
            'angkatan.max' => 'Angkatan maksimal :max karakter',

        ];
    }
}
