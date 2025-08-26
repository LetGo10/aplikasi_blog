<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::with('user')->orderBy('created_at', 'desc');

        // Handle search function
        if ($request->has('search') && !empty($request->search)) {
            $searchTerm = $request->search;
            // title, content, category, user
            $query->where(function($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('content', 'like', '%' . $searchTerm . '%')
                    ->orWhere('category', 'like', '%' . $searchTerm . '%')
                    ->orWhereHas('user', function($q) use ($searchTerm) {
                        $q->where('name', 'like', '%' . $searchTerm . '%');
                    });
            });
        }

        return view('posts.index', [
            'posts' => $query->get()
        ]);
    }

    public function create()
    {
        $users = User::all();
        return view('posts.create', compact('users'));
    }

    public function show($slug)
    {

        $post = Post::with(['user', 'comments'])->where('slug', $slug)->firstOrFail();
        return view('posts.show', [
            'posts' => $post
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
        $post = Post::where('slug', $slug)->firstOrFail();
        $users = User::all();
        return view('posts.edit', [
            'post' => $post,
            'users' => $users
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
            //'author' => 'required|string|max:100',
            //'author_info' => 'nullable|string|max:255',
            'user_id' => 'nullable|exists:users,id',
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
            //'author' => 'required|string|max:100',
            //'author_info' => 'nullable|string|max:255',
            'user_id' => 'nullable|exists:users,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'nullable|string|max:100',
        ]);

        $post->update($validatedData);
        return back()->with('success','Post updated successfully');
    }

    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
