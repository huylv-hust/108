<?php

namespace Modules\Users\Http\Requests;

use App\Http\Requests\Request;

class LoginRequest extends Request
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

    public function messages()
    {
        return [
            'username.required' => 'Hãy Nhập Tên Đăng Nhập',
            'password.required' => 'Hãy Nhập Mật Khẩu',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|max:25',
            'password' => 'required|max:25',
        ];
    }

}
