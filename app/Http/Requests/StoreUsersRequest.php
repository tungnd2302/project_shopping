<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StoreUsersRequest extends FormRequest
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
           'email'            => 'required|unique:users|email|min:10',
           'password'         => 'min:6|required',
           'password_confirm' => 'same:password|required',
           'roleid'           => 'required|not_in:-1',
           'fullname'         => 'required|min:10',  
           'name'             => 'required|min:2',  
           // 'address'       => 'min:10',
           // 'phone'         => 'numeric|digits:10',
        ];
    }

    public function messages()
    {
        return [
            'email'     => ':attribute phải đúng định dạng',
            'unique'    => ':attribute đã tồn tại',    
            'max'       => ':attribute không được lớn hơn :max',    
            'min'       => ':attribute không được nhỏ hơn :min kí tự', 
            'same'      => ':attribute phải trùng nhau',
            'required'  => ':attribute không được để trống',
            'in'        => 'Phải chọn :attribute',
            'not_in'    => 'Phải chọn :attribute ',
            'numeric'  => ':attribute phải là số',
            'digits' => ':attribute gồm :digits ký tự'
        ];
    }

    public function attributes()
    {
        return [
            'email'            => 'Email',
            'roleid'             => 'Chức vụ',
            'password'         => 'Mật khẩu',
            'password_confirm' => 'Mật khẩu',
            'fullname'         => 'Tên',
            'phone'            => 'Số điện thoại',
            'address'          => 'Địa chỉ',
            'name'             => 'Tên người dùng'
        ];
    }
}
