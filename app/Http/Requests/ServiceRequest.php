<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'min:8',
            'confirmPassword' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '・名前を入力して下さい。',
            'email.required' => '・メールアドレスを入力して下さい。',
            'password.min' => '・パスワードは8文字以上で入力して下さい。',
            'confirmPassword.required' => '・パスワードとパスワード (確認) が一致しません。',
            'confirmPassword.same' => '・パスワードとパスワード (確認) が一致しません。',
        ];
    }
}
