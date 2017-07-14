<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{
    public function getIndex()
    {
    	//$products = Product::all();
    	$products = Product::latest('id')->paginate(3);
    	return view('store.all_products', compact('products'));
    }

    public function showProduct(Product $product)
    {
        return view('store.show_product', compact('product'));//type casting
    }
}
