@extends('layouts.app')

@section('content')
<div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="mx-auto max-w-3xl">

        <div class="flex items-center gap-x-4 text-sm text-gray-500">
            <time>{{ \Carbon\Carbon::parse($posts['created_at'])->format('j M Y') }}</time>
            <span class="bg-green-100 text-green-700 px-3 py-1.5 rounded-full text-xs font-medium">
                {{ $posts['category'] }}
            </span>
        </div>

        <h1 class="mt-6 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
            {{ $posts['title'] }}
        </h1>

        <img src="{{ asset('img/' . $posts->image) }}" class="mt-8 rounded-lg w-full h-[400px] object-cover shadow-lg">

        <div class="mt-8 text-lg leading-8 text-gray-700">
            {{ $posts['content']}}
        </div>

        <!-- Edit + Delete Buttons -->
        <div class="mt-6 flex gap-3">
            <a href="{{ route('posts.edit', $posts['slug']) }}"
            class="inline-block px-4 py-2 bg-green-700 text-white rounded-lg hover:bg-green-800 transition">
                Edit Post
            </a>

            <form action="{{ route('posts.destroy', $posts['slug']) }}" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this post? This action cannot be undone.')"
                class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-red-600 hover:bg-red-700 transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                    Delete
                </button>
            </form>
        </div>

        <!-- Info penulis -->
        <div class="mt-12 flex items-center gap-x-4 border-t border-gray-200 pt-6">
            <img src="{{ asset('img/3.png') }}" alt="Penulis" class="w-12 h-12 rounded-full">
            <div>
                <p class="text-sm font-semibold text-gray-900">{{ $posts['author'] }}</p>
                <p class="text-sm text-gray-600">{{ $posts['author_info']}}</p>
            </div>
        </div>

        {{-- Success message --}}
        @if(session('success'))
            <div class="mt-8 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- Comments Section --}}
        <div class="mt-12 max-w-3xl mx-auto">
            <h2 class="text-3xl font-extrabold mb-6 text-gray-900">Comments</h2>

            @forelse($posts->comments as $comment)
                <div class="mb-6 p-5 rounded-lg shadow-sm bg-gray-50 border border-gray-200">
                    <div class="flex items-center justify-between mb-2">
                        <p class="font-semibold text-gray-800">{{ $comment->user_name }}</p>
                        <time class="text-xs text-gray-500" title="{{ $comment->created_at }}">
                            {{ $comment->created_at->diffForHumans() }}
                        </time>
                    </div>
                    <p class="text-gray-700 leading-relaxed whitespace-pre-line">{{ $comment->content }}</p>
                </div>
            @empty
                <p class="text-gray-500 italic">No comments yet. Be the first to comment!</p>
            @endforelse

            {{-- Comment form --}}
            <form action="{{ route('comments.store') }}" method="POST" class="mt-10 bg-white p-8 rounded-lg shadow-md border border-gray-300">
                @csrf
                <input type="hidden" name="post_id" value="{{ $posts->id }}">

                <label for="user_name" class="block font-semibold text-gray-700 mb-2">Name<span class="text-red-500">*</span>:</label>
                <input type="text" id="user_name" name="user_name" required
                    class="w-full border border-gray-300 rounded-md p-3 mb-5 focus:outline-none focus:ring-2 focus:ring-green-600 @error('user_name') border-red-500 @enderror"
                    value="{{ old('user_name') }}">
                @error('user_name')
                    <p class="text-red-600 text-sm mb-4">{{ $message }}</p>
                @enderror

                <label for="user_email" class="block font-semibold text-gray-700 mb-2">Email (optional):</label>
                <input type="email" id="user_email" name="user_email"
                    class="w-full border border-gray-300 rounded-md p-3 mb-5 focus:outline-none focus:ring-2 focus:ring-green-600 @error('user_email') border-red-500 @enderror"
                    value="{{ old('user_email') }}">
                @error('user_email')
                    <p class="text-red-600 text-sm mb-4">{{ $message }}</p>
                @enderror

                <label for="content" class="block font-semibold text-gray-700 mb-2">Comment<span class="text-red-500">*</span>:</label>
                <textarea id="content" name="content" rows="5" required
                        class="w-full border border-gray-300 rounded-md p-3 mb-6 resize-none focus:outline-none focus:ring-2 focus:ring-green-600 @error('content') border-red-500 @enderror">{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-red-600 text-sm mb-4">{{ $message }}</p>
                @enderror

                <button type="submit"
                        class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg transition shadow-md focus:outline-none focus:ring-2 focus:ring-green-500">
                    Submit Comment
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
