<?php

namespace App\Http\Controllers;

use App\Common;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function index(){
		$navMenu = Common::navMenu();
		$products = Common::products();

		return view('products.index', compact('navMenu', 'products'));
	}

	public function getDetail(){
		$products = Common::products();

		$productId = Request()->get('id');

		$product = $products->where('Id', $productId)->first();

		$html = view('products._ajax._detail', compact('product'))->render();
		return response()->json(['html' => $html]);
	}
}
