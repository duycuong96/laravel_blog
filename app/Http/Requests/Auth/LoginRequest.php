<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>'required|email|min:6',
            'password'=>'required|min:6',
        ];
    }

    public function messages()
    {
        return  [
            'email.required'=>'Không được để trống email',
            'email.email'=>'Email không đúng định dạng',
            'email.min'=>'Email không được nhỏ hơn 6 ký tự',
            'password.required'=>'Không được để trống password',
            'password.min'=>'Password Không được nhỏ hơn 6 ký tự',
        ];
    }
}
