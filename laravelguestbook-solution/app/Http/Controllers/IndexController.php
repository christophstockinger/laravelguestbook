<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class IndexController extends Controller
{
    // Index Action
    public function index() {
      $posts = Post::all();
      return view('index.index', ['posts' => $posts]);
    }
}
