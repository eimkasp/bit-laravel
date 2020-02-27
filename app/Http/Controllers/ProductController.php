<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importuoju naudojamus modelius, kontrolleryje
use App\Product;

class ProductController extends Controller
{
    //funkcija produktu atvaizdavimui
	public function index() {

		// kreipiames i Product modeli
		$products = Product::all();

		// grazzinu view faila is /resources/views/products/index.blade.php
		return view('products.index', compact(['products']));
	}
}
