@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6">Edit Post</h1>

    <form action="" method="POST" enctype="multipart/form-data">

        <!-- Title -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Title</label>
            <input type="text" name="title" value="{{ old('title', $post['title']) }}" class="w-full border rounded px-3 py-2">
        </div>

        <!-- Content -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Content</label>
            <textarea name="content" rows="6" class="w-full border rounded px-3 py-2">{{ old('content', $post['content']) }}</textarea>
        </div>

        <!-- Author -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Author</label>
            <input type="text" name="author" value="{{ old('author', $post['author']) }}" class="w-full border rounded px-3 py-2">
        </div>

        <!-- Author Info -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Author Info</label>
            <input type="text" name="author_info" value="{{ old('author_info', $post['author_info']) }}" class="w-full border rounded px-3 py-2">
        </div>

        <!-- Image -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Image</label>
            <input type="file" name="image" class="w-full border rounded px-3 py-2">
        </div>

        <!-- Category -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Category</label>
            <input type="text" name="category" class="w-full border rounded px-3 py-2" value="{{ $post['category'] }}">
        </div>

        <!-- Date -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Date</label>
            <input type="date" name="created_at" value="{{ old('created_at', \Carbon\Carbon::parse($post['created_at'])->format('Y-m-d')) }}" class="w-full border rounded px-3 py-2">
        </div>

        <!-- Submit -->
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>
</div>
@endsection
