<?php namespace Modules\Users\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use Pingpong\Modules\Routing\Controller;

class UsersController extends Controller {

    public function index(User $user, Request $request)
    {
        $data['user'] = $user->getList($request->all());
        $data['filter'] = $request->all();
        $query_string = empty($data['filters']) ? '' : '?' . http_build_query($data['filters']);
        $request->session()->put('list_user_url', $request->url() . $query_string);

        return view('users::admin/list',$data);
    }

    public function detail($id)
    {
        if(!$id || !$data['user'] = User::find($id))
        {
            return redirect()->route('list_user');
        }

        return view('users::admin/detail', $data);
    }

    public function postCreate()
    {

    }

    public function postEdit(Request $request, $id)
    {
        if ($request->all()) {

        }
        $data['user'] = User::find($id);
        return view('users::admin/edit',$data);
    }
}