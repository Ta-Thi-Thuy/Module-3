<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginExampleRequest extends FormRequest
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
            'email'=> 'required|email|unique:users',
            'password'=>'required',
        ];
    }

    public function messages()
    {
        $messages =[
            'email.required'=>'Email không đúng!',
            'email.unique'=>'Email đã tồn tại!',
            'password.required'=>'Yêu cầu nhập mật khẩu!!!'
        ];

        return $messages;

    }
}
