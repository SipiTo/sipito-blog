<?php

namespace Sipi\Http\Controllers;

use Illuminate\Http\Request;
use Sipi\Posts;

class PostsController extends Controller
{
    public function index()
    {
    	$posted = Posts::orderBy('id','ASC')->paginate(10);
    	return view('welcome', compact('posted'));
    }
}
