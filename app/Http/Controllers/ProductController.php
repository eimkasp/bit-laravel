<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Product;
use Illuminate\Http\Request;


// importuoju naudojamus modelius, kontrolleryje
class ProductController extends Controller
{
    //funkcija produktu atvaizdavimui
	public function index() {

		// kreipiames i Product modeli
		// Jei naudojame ne all arba find funckijas, visada kreipiantis i modeli
		// reikia pabaigoje parasyti ->get()
		$products = Product::paginate(2);

		$productsCount = Product::count();

		// grazzinu view faila is /resources/views/products/index.blade.php
		return view('products.index', compact(['products', 'productsCount']));
	}



	/* produkto sukurimo formos atvaizdavimas */
	public function create() {
		// graziname /resources/views/products/create.blade.php
		// faila


		$categories = Category::all();

		return view('products.create', compact('categories'));
	}

	/* Funkcija gauti duomenis is formos ir sudeti i duombaze  */
	public function store(Request $request) {
		// sukuriu nauja produkto objekta
		// kreipiuosi i modelio klase
		$product = new Product();

		$product->title = $request->input('title');
		$product->price = $request->input('price');
		$product->category_id = $request->input('category_id');

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
	public function show($id) {
		// findOrFail funkcija grazina 404 atsakyma, jei toks elementas nerastas duombazeje
		$product = Product::findOrFail($id);

		return view('products.show', compact('product'));
	}

	/* TODO : Padaryti produkto redagavimo puslapi (cia turi buti rodoma forma su pasirinkto produkto duomenimis)  */
	public function edit($id) {
		$product = Product::findOrFail($id);

		return view('products.edit', compact('product'));
	}

	/* TODO : Padaryti produkto redagavimo loogika */
	public function update(Request $request, $id) {
		$product = Product::findOrFail($id);

		$product->title = $request->input('title');
		$product->price = $request->input('price');
		$product->save();

		return redirect()->route('products.show', $product->id);
	}
}
