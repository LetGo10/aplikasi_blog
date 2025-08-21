@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-12">
    <!-- Breadcrumb -->
    <nav class="mb-8">
        <div class="flex items-center space-x-2 text-sm text-gray-500">
            <a href="{{ route('posts.index') }}" class="hover:text-gray-700 transition-colors">
                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                All Posts
            </a>
            <span class="text-gray-300">/</span>
            <span class="text-gray-700">{{ $posts['title'] }}</span>
        </div>
    </nav>

    <!-- Article Header -->
    <header class="mb-12 text-center">
        <div class="mb-6">
            <span class="inline-flex items-center px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">
                {{ $posts['category'] }}
            </span>
        </div>

        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
            {{ $posts['title'] }}
        </h1>

        <div class="flex items-center justify-center space-x-6 text-gray-600">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('img/3.png') }}" alt="Author" class="w-12 h-12 rounded-full border-2 border-gray-200">
                <div class="text-left">
                    <p class="font-semibold text-gray-900">{{ $posts->user ? $posts->user->name : 'Unknown Author' }}</p>
                    <p class="text-sm text-gray-500">{{ $posts->user ? $posts->user->email : 'No email available' }}</p>
                </div>
            </div>
            <div class="h-8 w-px bg-gray-300"></div>
            <div class="text-center">
                <time datetime="{{ $posts['created_at'] }}" class="text-sm text-gray-500">
                    Published on<br>
                    <span class="font-medium text-gray-700">{{ \Carbon\Carbon::parse($posts['created_at'])->format('F j, Y') }}</span>
                </time>
            </div>
        </div>
    </header>

    <!-- Article Image -->
    <img src="{{ asset('img/' . $posts->image) }}" class="rounded-lg w-full h-[400px] object-cover shadow-lg mb-12">

    <!-- Article Content -->
    <article class="prose prose-lg max-w-none">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 md:p-12">
            <div class="text-gray-700 leading-relaxed text-lg whitespace-pre-line">
                {{ $posts['content'] }}
            </div>
        </div>
    </article>

    <!-- Footer Actions -->
    <footer class="mt-12 pt-8 border-t border-gray-200">
        <div class="flex items-center justify-between flex-wrap gap-3">
            <div class="text-sm text-gray-500">
                Published {{ \Carbon\Carbon::parse($posts['created_at'])->diffForHumans() }}
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ route('posts.index') }}"
                   class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition">
                    Back to Posts
                </a>

                <a href="{{ route('posts.edit', $posts['slug']) }}"
                   class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition">
                    Edit Post
                </a>

                <a href="{{ route('posts.create') }}"
                   class="inline-flex items-center px-4 py-2 text-sm font-medium rounded-lg text-white bg-green-600 hover:bg-green-700 transition">
                    New Post
                </a>

                <form action="{{ route('posts.destroy', $posts['slug']) }}" method="POST" class="inline-block"
                      onsubmit="return confirm('Are you sure you want to delete this post? This action cannot be undone.')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium rounded-lg text-white bg-red-600 hover:bg-red-700 transition">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </footer>

    <!-- Comments Section -->
    <div class="mt-12 pt-8 border-t border-gray-200">
        <h3 class="text-2xl font-bold text-gray-900 mb-6">
            Comments ({{ $posts->comments->count() }})
        </h3>

        <!-- Comment Form -->
        <div class="bg-gray-50 rounded-lg p-6 mb-8">
            <h4 class="text-lg font-semibold text-gray-900 mb-4">Leave a Comment</h4>

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('comments.store', $posts->slug) }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="post_id" value="{{ $posts->id }}">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="author_name" class="block text-sm font-medium text-gray-700 mb-2">Name *</label>
                        <input type="text"
                                id="author_name"
                                name="author_name"
                                value="{{ old('author_name') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('author_name') border-red-500 @enderror"
                                required>
                        @error('author_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="author_email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                        <input type="email"
                                id="author_email"
                                name="author_email"
                                value="{{ old('author_email') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('author_email') border-red-500 @enderror"
                                required>
                        @error('author_email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Comment *</label>
                    <textarea id="content" name="content" rows="4"
                              class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-600 @error('content') border-red-500 @enderror"
                              placeholder="Write your comment here..." required>{{ old('content') }}</textarea>
                    @error('content')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-lg font-medium text-sm text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition">
                    Submit Comment
                </button>
            </form>
        </div>

        <!-- Comments List -->
        @if($posts->comments->count() > 0)
            <div class="space-y-6">
                @foreach($posts->comments as $comment)
                    <div class="bg-white rounded-lg border border-gray-200 p-6">
                        <div class="flex items-start justify-between">
                            <div class="flex items-center space-x-3 mb-3">
                                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                                    <span class="text-white font-semibold text-sm">
                                        {{ strtoupper(substr($comment->author_name, 0, 1)) }}
                                    </span>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-gray-900">{{ $comment->author_name }}</h5>
                                    <p class="text-sm text-gray-500">
                                        {{ $comment->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>

                            @auth
                                @if(Auth::id() === $comment->user_id)
                                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="inline-block"
                                          onsubmit="return confirm('Are you sure you want to delete this comment?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                                    </form>
                                @endif
                            @endauth
                        </div>

                        <div class="text-gray-700 leading-relaxed whitespace-pre-line">
                            {{ $comment->content }}
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-8">
                <p class="text-sm text-gray-500">No comments yet. Be the first to comment!</p>
            </div>
        @endif
    </div>
</div>
@endsection
