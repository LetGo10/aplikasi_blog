<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
        //Input Validation
        $validatedData = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'user_name' => 'required|string|max:255',
            'user_email' => 'nullable|email|max:255',
            'content' => 'required|string',
        ]);

        Comment::create($validatedData);
        return back()->with('success','Comment submitted successfully!');
    }
}
