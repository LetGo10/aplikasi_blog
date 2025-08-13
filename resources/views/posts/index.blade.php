@extends('layouts.app')

@section('content')
    <section class="bg-green-50 py-20" id="destinasi">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-green-800">Destinasi Menarik</h2>
                <p class="mt-2 text-gray-700">Senarai air terjun popular yang wajib anda lawati di Selangor.</p>
            </div>

            <div class="flex flex-wrap gap-10">

                @foreach($posts as $post)
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <img src="{{ asset('img/kanching.jpg') }}" alt="Air Terjun Kanching" class="rounded-lg w-full h-48 object-cover mb-4" />
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2025-08-01" class="text-gray-500">{{ \Carbon\Carbon::parse($post['created_at'])->format('j M Y') }}</time>
                        <span class="bg-green-100 text-green-700 px-3 py-1.5 rounded-full text-xs font-medium">Alam Semula Jadi</span>
                    </div>
                    <div class="grow">
                        <h3 class="mt-3 text-lg font-semibold text-gray-900 group-hover:text-green-700">
                            {{ $post['title'] }}
                        </h3>
                        <p class="mt-3 text-sm text-gray-600">{{ $post['content'] }}</p>
                        <a href="{{ route('posts.edit', $post['id']) }}" class="mt-4 inline-block text-sm font-medium text-green-700 hover:underline">Lihat Penuh →</a>
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
