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

        <!-- Info penulis -->
        <div class="mt-12 flex items-center gap-x-4 border-t border-gray-200 pt-6">
            <img src="{{ asset('img/3.png') }}" alt="Penulis" class="w-12 h-12 rounded-full">
            <div>
                <p class="text-sm font-semibold text-gray-900">{{ $posts['author'] }}</p>
                <p class="text-sm text-gray-600">{{ $posts['author_info']}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
