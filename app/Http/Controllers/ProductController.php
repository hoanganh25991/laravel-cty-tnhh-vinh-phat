<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductController extends Controller
{
    public function create() {
		return view('admin.products.create');
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
     */
	public function store(Request $request) {
		$product = new Product;
		$product->title = $request->title;
		$product->introduction = $request->introduction;
		$product->content = $request->get('content');
		$product->origin = $request->origin;
		$product->type = $request->type;
		$product->using_phase = $request->using_phase;
		$product->save();
		return back();
	}
	public function show(Product $product) {
		return view('products.show',compact('product'));
	}

	public function index(){
		$products = Product::all();
		return $products;
	}
}
