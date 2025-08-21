@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-16">
    <!-- Header -->
    <div class="mb-12 text-center">
        <h1 class="text-3xl font-semibold text-gray-800 mb-2">Edit Post</h1>
        <p class="text-gray-500 text-sm">Update your blog post details below</p>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="mb-8 p-4 bg-green-100 border border-green-300 rounded-lg text-green-800">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
        <form action="{{ route('posts.update', $post['slug']) }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-8">
            @csrf
            @method('PUT')

            <!-- Post Information -->
            <div class="space-y-6">
                <div class="border-b border-gray-100 pb-4">
                    <h2 class="text-lg font-semibold text-gray-900">Post Information</h2>
                    <p class="text-sm text-gray-500">Basic details about your blog post</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Title -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title <span class="text-red-500">*</span></label>
                        <input type="text" name="title" id="title"
                            value="{{ old('title', $post['title']) }}"
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm @error('title') border-red-300 @enderror">
                        @error('title')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Slug -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Slug <span class="text-red-500">*</span></label>
                        <input type="text" name="slug" id="slug"
                            value="{{ old('slug', $post['slug']) }}"
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm @error('slug') border-red-300 @enderror">
                        @error('slug')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                        <input type="text" name="category"
                            value="{{ old('category', $post['category']) }}"
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm @error('category') border-red-300 @enderror">
                        @error('category')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Content -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                    <textarea name="content" rows="8"
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm @error('content') border-red-300 @enderror">{{ old('content', $post['content']) }}</textarea>
                    @error('content')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Author Information -->
            <div class="space-y-6">
                <div class="border-b border-gray-100 pb-4">
                    <h2 class="text-lg font-semibold text-gray-900">Author Information</h2>
                    <p class="text-sm text-gray-500">Select or update the author details</p>
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="user_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Author
                        </label>
                        <select
                            name="user_id"
                            id="user_id"
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors text-sm @error('user_id') border-red-300 @enderror"
                        >
                            <option value="">Select an author (optional)</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ old('user_id', $post->user_id) == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }} ({{ $user->email }})
                                </option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <p class="text-red-500 text-sm mt-2 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                        Author Image URL
                    </label>
                    <input
                        type="url"
                        name="image"
                        id="image"
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors text-sm @error('image') border-red-300 @enderror"
                        value="{{ old('image', $post->image) }}"
                        placeholder="https://example.com/author-photo.jpg"
                    >
                    <p class="text-xs text-gray-500 mt-1">Provide a URL to the author's profile picture</p>
                    @error('image')
                        <p class="text-red-500 text-sm mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                <a href="{{ route('posts.show', $post['slug']) }}"
                   class="px-6 py-3 border text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    Cancel
                </a>
                <button type="submit"
                    class="px-8 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-colors text-sm font-medium">
                    Update Post
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Slug Auto-generation -->
<script>
document.getElementById('title').addEventListener('input', function() {
    const title = this.value;
    const slugField = document.getElementById('slug');

    if (slugField.value.trim() === '') {
        const slug = title
            .toLowerCase()
            .replace(/[^a-z0-9 -]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-')
            .trim('-');
        slugField.value = slug;
    }
});
</script>
@endsection
