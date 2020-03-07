<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email|min:6',
            'password'=>'required|min:6',
            'avatar' => 'image',
            'phone' => 'required|numeric',
            'role_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được để trống',
            'email.required'=>'Không được để trống email',
            'email.email'=>'Email không đúng định dạng',
            'email.min'=>'Email không được nhỏ hơn 6 ký tự',
            'password.required'=>'Không được để trống password',
            'password.min'=>'Password Không được nhỏ hơn 6 ký tự',
            'avatar.required' => 'Ảnh không được để trống',
            'avatar.image' => 'Ảnh không đúng định dạng',
            'phone.required' => 'Số điện thoại không để trống',
            'phone.number' => 'Chưa nhập số điện thoại',
            'role_id.required' => 'Phải chọn vai trò',
        ];
    }
}
