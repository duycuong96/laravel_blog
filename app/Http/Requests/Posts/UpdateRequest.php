<?php

namespace App\Http\Requests\Posts;

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
            'title'=>'required',
            'content'=>'required',
            'image'=>'image',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Không được để trống',
            'content.required' => 'Không được để trống',
            'image.image' => 'Ảnh không đúng định dạng',
        ];
    }
}
