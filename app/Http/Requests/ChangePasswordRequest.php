<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Rules\MatchOldPassword;
class ChangePasswordRequest extends FormRequest
{
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
            'oldpassword'     => ['required'],
            'password'        => ['required'],
            'repassword'      => ['required','same:password'],
        ];
    }

    public function messages()
    {
        return [
            'required'  => ':attribute không được để trống',
            'same'   => ":attribute phải trùng nhau",
        ];
    }

    public function attributes()
    {
        return [
            'oldpassword'      => 'Mật khẩu cũ',
            'password'         => 'Mật khẩu',
            'repassword'       => 'Mật khẩu',
        ];
    }
}
