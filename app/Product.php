<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // $table nurodo kuriai mysql duombazes lentelei priklauso modelis
	protected $table = 'products';

	public function price() {
		return $this->price . "€";
	}

	public function category() {
		return $this->hasOne('App\Category', 'id', 'category_id');
	}

	public function comments() {
		return $this->hasMany('App\Comment', 'product_id', 'id');
	}
}
