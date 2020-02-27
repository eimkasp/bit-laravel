<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
        	// cia aprasoma visos lenteles struktura
            $table->bigIncrements('id');
			$table->string('title');
			$table->double('price');
			$table->text('description')->nullable();
			$table->string('image')->nullable();
			// sita funkcija visada sukuria 2 stulpelius created_at ir updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
