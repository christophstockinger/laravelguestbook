<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    // Index Action
    public function index() {
      return view ('post.index');
    }

    // Submit Action
    public function submit(Request $request) {
        $post = new Post();
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->message = $request->input('message');
        $post->save();

        return view ('post.submit');
    }
}
