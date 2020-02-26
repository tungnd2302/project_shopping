<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateRolesRequest extends FormRequest
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
           'name'            => [
                                  'required',
                                   'min:5',
                                   'max:100',
                                   Rule::unique('roles')->ignore($this->id)
                               ],
           'status'          => 'in:0,1,2',
        ];
    }

    public function messages()
    {
        return [
            'unique'    => ':attribute đã tồn tại',    
            'max'       => ':attribute không được lớn hơn :max',    
            'min'       => ':attribute không được nhỏ hơn :max',    
            'required'  => ':attribute không được để trống',
            'in'        => 'Phải chọn :attribute',
            'min'       => ':attribute không được nhỏ hơn :min',
        ];
    }

    public function attributes()
    {
        return [
            'name'          => 'Tên chức vụ',
            'status'        => 'Trạng thái',
            'description'   => 'Mô tả',
        ];
    }
}
