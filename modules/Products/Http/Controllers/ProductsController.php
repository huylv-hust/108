<?php namespace Modules\Products\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class ProductsController extends Controller {
	
	public function index()
	{
		return view('products::index');
	}
	
}