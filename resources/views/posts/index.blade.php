@extends('layouts.app')

@section('content')
    <section class="bg-green-50 py-20" id="destinasi">
        <div class="max-w-7xl mx-auto px-6">

            @if(session('success'))
                <div class="mb-6 px-4 py-3 rounded-lg bg-green-100 text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-green-800">Destinasi Menarik</h2>
                <p class="mt-2 text-gray-700">Senarai air terjun popular yang wajib anda lawati di Selangor.</p>
            </div>

            <!-- Search component -->
            <div class="max-w-md mx-auto mb-8">
                <form method="GET" action="{{ route('posts.index') }}" class="relative flex gap-2">
                    <div class="relative flex-grow">
                        <input type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Search Destinasi..."
                            class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        @if(request('search'))
                            <button type="button"
                                    onclick="document.querySelector('input[name=search]').value=''; this.closest('form').submit();"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <svg class="h-5 w-5 text-gray-400 hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        @endif
                    </div>
                    <button type="submit"
                    class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm rounded-lg transition-colors duration-200 shadow-sm hover:shadow-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>
            <!-- End -->

            <div class="flex flex-wrap gap-10">
                @foreach($posts as $post)
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <img src="{{ $post['image'] }}" class="rounded-lg w-full h-48 object-cover mb-4" />
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2025-08-01" class="text-gray-500">{{ \Carbon\Carbon::parse($post['created_at'])->format('j M Y') }}</time>
                        <span class="bg-green-100 text-green-700 px-3 py-1.5 rounded-full text-xs font-medium">Alam Semula Jadi</span>
                    </div>
                    <div class="grow">
                        <h3 class="mt-3 text-lg font-semibold text-gray-900 group-hover:text-green-700">
                            {{ $post['title'] }}
                        </h3>
                        <p class="mt-3 text-sm text-gray-600">{{ $post['content'] }}</p>
                        <a href="{{ route('posts.show', $post['slug']) }}" class="mt-4 inline-block text-sm font-medium text-green-700 hover:underline">Lihat Penuh →</a>
                    </div>

                    <!-- Bahagian Blogger -->
                    <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                        <img src="{{ asset('img/3.png') }}" alt="Wani" class="size-10 rounded-full bg-gray-50" />
                        <div class="text-sm/6">
                        <p class="font-semibold text-gray-900">
                            <a href="#">
                            <span class="absolute inset-0"></span>
                            </a>
                        </p>
                        <p class="text-gray-600">Penulis Blog</p>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
