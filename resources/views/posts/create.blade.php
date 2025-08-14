@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6">Create Post</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <!-- Title -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Title</label>
            <input type="text" name="title" class="w-full border rounded px-3 py-2" value="{{ old('title') }}">
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Slug -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Slug</label>
            <input type="text" name="slug" class="w-full border rounded px-3 py-2" value="{{ old('slug') }}">
            @error('slug')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Content -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Content</label>
            <textarea name="content" rows="6" class="w-full border rounded px-3 py-2" value="{{ old('content') }}"></textarea>
            @error('content')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Author -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Author</label>
            <input type="text" name="author" class="w-full border rounded px-3 py-2" value="{{ old('Author') }}">
            @error('author')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Author Info -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Author Info</label>
            <input type="text" name="author_info" class="w-full border rounded px-3 py-2" value="{{ old('author_info') }}">
            @error('author_info')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Image -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Image</label>
            <input type="file" name="image" class="w-full border rounded px-3 py-2">
        </div>

        <!-- Category -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Category</label>
            <input type="text" name="category" class="w-full border rounded px-3 py-2" value="{{ old('category') }}">
            @error('category')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit -->
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
            Create
        </button>
    </form>
</div>
@endsection
