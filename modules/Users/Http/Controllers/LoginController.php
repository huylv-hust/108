<?php namespace Modules\Users\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class LoginController extends Controller {

	public function index()
	{
		return view('users::login');
	}
}