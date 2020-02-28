<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


// importuoju naudojamus modelius, kontrolleryje
class ProductController extends Controller
{
    //funkcija produktu atvaizdavimui
	public function index() {

		// kreipiames i Product modeli
		$products = Product::all();

		// grazzinu view faila is /resources/views/products/index.blade.php
		return view('products.index', compact(['products']));
	}

	/* produkto sukurimo formos atvaizdavimas */
	public function create() {
		// graziname /resources/views/products/create.blade.php
		// faila
		return view('products.create');
	}

	/* Funkcija gauti duomenis is formos ir sudeti i duombaze  */
	public function store(Request $request) {
		// sukuriu nauja produkto objekta
		// kreipiuosi i modelio klase
		$product = new Product();

		$product->title = $request->input('title');
		$product->price = $request->input('price');

		// funkcija save issaugo musu sukurta objekta duombazeje
		$product->save();

		// nukreipiu zmogu i rout'ea pavadinimu products.index
		// is routes/web.php
		return redirect()->route('products.index');
	}

	public function delete($id) {
		$product = Product::find($id);

		$product->delete();

		session('labas', '123');

		return redirect()->route('products.index');
	}

	/* TODO : Padaryti produkto atvaizdavimo puslapi */
	public function show() {

	}

	/* TODO : Padaryti produkto redagavimo puslapi (cia turi buti rodoma forma su pasirinkto produkto duomenimis)  */
	public function edit() {

	}

	/* TODO : Padaryti produkto redagavimo loogika */
	public function update() {

	}
}
