<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller {
	//

	public function index() {
		// iskvieciame formos atvaizdavimo faila kuris gyvena
		// /resources/views/calculator.blade.php
		return view( 'calculator' );
	}


	public function calculate( Request $request ) {
		// Kaip darydavom seniau
		$number1 = $_POST['number1'];

		// Kaip darome laravelyje
		$number2 = $request->number2;

		// arba dazniausiai naudojamas budas
		$number2 = $request->input( 'number2' );

		// suskaiciuoju rezultata
		$result = $number1 + $number2;

		// iskvieciame rezultatu faila kuris gyvena
		// /resources/views/results.blade.php
		// antras parametras nurodo, kokius duomenis
		// perduodame is controllerio funkcijos i view faila
		return view( 'results', compact( 'result' ) );

		// alternatyvus budas perduoti duomenis i view faila
//		return view( 'results', [ "result" => $result ] );
	}
}
