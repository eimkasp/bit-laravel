<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdColumnToProductsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		// jei norime papildyti esama lenteles struktura,
		// turime kreiptis i table funkcija, ne create
		Schema::table( 'products', function ( Blueprint $table ) {
			$table->bigInteger( 'category_id' )
				  ->unsigned()
				  ->after( 'image' )
				  ->default( 1 );
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table( 'products', function ( Blueprint $table ) {
			//
		} );
	}
}
