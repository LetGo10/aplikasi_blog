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

    public function create()
    {
        return view('posts.create');
    }

    public function show($slug)
    {
        $posts = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', [
            'posts' => $posts
        ]);
    }

    /*public function edit($id)
    {
        $posts = Post::findOrFail($id);
        return view('posts.view', [
            'posts' => $posts
        ]);
    }*/

    public function edit($slug)
    {
        $posts = Post::where('slug', $slug)->firstOrFail();
        return view('posts.edit', [
            'post' => $posts
        ]);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        //Input Validation
        $validatedData = $request->validate([
            'slug' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:100',
            'author_info' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'nullable|string|max:100',
        ]);

        Post::create($validatedData);
        return back()->with('success','Post create sucessfully');
    }

    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        //Input Validation
        $validatedData = $request->validate([
            'slug' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:100',
            'author_info' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'nullable|string|max:100',
        ]);

        $post->update($validatedData);
        return back()->with('success','Post updated successfully');
    }
}
