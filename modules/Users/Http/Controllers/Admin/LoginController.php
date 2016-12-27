<?php namespace Modules\Users\Http\Controllers\Admin;

use App\User;
use Illuminate\Support\Facades\Session;
use Modules\Users\Http\Requests\LoginRequest;
use Pingpong\Modules\Routing\Controller;

class LoginController extends Controller
{

    public function index()
    {
        return view('users::admin/login');
    }

    public function login(LoginRequest $request, User $user)
    {
        $fillter = $request->all();
        $data = $user->checkLogin($fillter);
        if ($data) {
            return redirect()->route('home_admin');
        }
        Session::flash('error', 'Sai Tên Đăng Nhập hoặc Mật Khẩu!');

        return redirect()->back()->withInput();
    }

    public function getCreate()
    {
    }

    public function postCreate()
    {
    }
}