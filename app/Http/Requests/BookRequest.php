<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'judul_buku' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'judul_buku.required' => 'Judul buku harus diisi',
            'pengarang.required' => 'Pengarang harus diisi',
            'penerbit.required' => 'Penerbit harus diisi',
            'tahun_terbit.required' => 'Tahun terbit harus diisi',
            'tahun_terbit.numeric' => 'Tahun terbit harus angka',
        ];
    }
}
