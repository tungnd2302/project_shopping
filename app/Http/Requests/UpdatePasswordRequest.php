<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdatePasswordRequest extends FormRequest
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
        // echo 'aaaaaaaaaa'.$this->id;
        return [
            'password'         => 'min:6|required',
            'password_confirm' => 'required|same:password|min:6',
        ];
    }

    public function messages()
    {
        return [
            'min'       => ':attribute không được nhỏ hơn :min kí tự', 
            'same'      => ':attribute phải trùng nhau',
            'required'  => ':attribute không được để trống',
        ];
    }

    public function attributes()
    {
        return [
            'password'         => 'Mật khẩu',
            'password_confirm' => 'Mật khẩu',
        ];
    }
}
