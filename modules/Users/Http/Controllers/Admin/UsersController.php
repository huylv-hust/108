<?php namespace Modules\Users\Http\Controllers\Admin;

use Pingpong\Modules\Routing\Controller;

class UsersController extends Controller {

    public function index()
    {
        return view('users::admin/list');
    }

    public function login()
    {
    }

    public function getCreate()
    {

    }

    public function postCreate()
    {

    }
}