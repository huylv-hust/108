<?php namespace Modules\Oders\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class OdersController extends Controller {
	
	public function index()
	{
		return view('oders::index');
	}
	
}