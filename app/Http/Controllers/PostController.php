<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Gate;

class PostController extends Controller
{
    public function show()
    {
    	auth()->loginUsingId(1);
    	//auth()->logout();
    	$post = Post::first();
    	if (Gate::denies('show-post', $post)) {
    		abort(403, "Sorry");
    	}
    	return $post->title;
    }
}
