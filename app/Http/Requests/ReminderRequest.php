<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReminderRequest extends FormRequest
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
            'password' => 'required|min:6|max:15|confirmed',
            'password_confirmation' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Harus di isi',
            'password.min' => 'Minimalnya 6',
            'password.max' => 'Maksimalnya 15',
            'password_confirmation.required' => 'Harus di isi',
            'password_confirmation.same' => 'Harus sama passwordnya'
        ];
    }
}
