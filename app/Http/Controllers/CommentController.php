<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //

	public function store(Request $request) {
		//
		$comment = new Comment();

		$comment->comment_text = $request->input('comment_text');
		$comment->product_id = $request->input('product_id');

		$comment->save();
		/// issaugojus komentara, nukreipiu vartotoja i produkto puslapi,
		/// kuriam priskirtas buvo komentaras
		return redirect()->route('products.show', $comment->product_id);
	}
}
