<?php

namespace Sipi\Http\Controllers;

use Sipi\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
    	//Return post categoria=1
    	$posts = Posts::where('categoria',1)
    		->orderBy('id','DESC')
    		->paginate(5);

    	$posted = Posts::where('categoria',2)
	    	->orderBy('id','DESC')
	    	->paginate(5);

    	return view('welcome', compact('posts','posted'));
    }

    public function show($id)
    {
        $post = Posts::find($id);
        return view('posts.show', compact('post'));
    }
}
