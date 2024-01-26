<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformasiCreateRequest extends FormRequest
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
            'postingan' => 'required',
             'gambar'=> 'required',
        ];
    }

    public function attributes()
    {
        return [
            'postingan' => 'Postingan',
            'gambar' => 'Gambar',
        ];
    }

    public function messages()
    {
        return [
            'postingan.required' => 'Postingan wajib diisi',
             'gambar.required'=> 'Gambar wajib diisi',

        ];
    }
}
