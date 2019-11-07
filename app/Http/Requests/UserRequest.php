<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $id = $this->user;
        return [
            'email' => 'required|unique:users,email,' . $id,
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email harus ada',
            'email.unique' => 'Emailnya udah kedaftar, jangan sama',
            'password.required' => 'Harus pake password',
            'password.min' => 'Minimal 6 bang',
            'password.confirmed' => 'Passwordnya samain',
            'password_confirmation.required' => 'Harus di isi ini juga',
            'password_confirmation.same' => 'Samain sama password',
            'first_name.required' => 'Nama depan punten',
            'last_name.required' => 'Nama belakang punten',
        ];
    }
}
