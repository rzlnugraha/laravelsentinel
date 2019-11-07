<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required|min:5',
            'author' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul artikel harus diisi',
            'content.required' => 'Konten harus diisi',
            'content.min' => 'Minimal 5',
            'author.required' => 'Pengarang harus diisi',
        ];
    }
}
