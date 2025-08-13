<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::all();
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        return view('posts.view', [
            'posts' => $posts
        ]);
    }
}
