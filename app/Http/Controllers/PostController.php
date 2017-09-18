<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
    	auth()->loginUsingId(1);
    	//auth()->logout();
    	$posts = Post::all();
    	// if (Gate::denies('show-post', $posts)) {
    	// 	abort(403, "Sorry");
    	// }
    	return view('show', compact('posts'));
    }
}
