@extends('layouts.app')

@section('content')
    <section class="bg-green-50 py-20" id="destinasi">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-green-800">Destinasi Menarik</h2>
                <p class="mt-2 text-gray-700">Senarai air terjun popular yang wajib anda lawati di Selangor.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- Artikel 1 -->
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <img src="{{ asset('img/kanching.jpg') }}" alt="Air Terjun Kanching" class="rounded-lg w-full h-48 object-cover mb-4" />
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2025-08-01" class="text-gray-500">1 Ogos 2025</time>
                        <span class="bg-green-100 text-green-700 px-3 py-1.5 rounded-full text-xs font-medium">Alam Semula Jadi</span>
                    </div>
                    <div class="grow">
                        <h3 class="mt-3 text-lg font-semibold text-gray-900 group-hover:text-green-700">
                            Air Terjun Kanching: Keindahan 7 Tingkat
                        </h3>
                        <p class="mt-3 text-sm text-gray-600">Terletak berhampiran Rawang, Air Terjun Kanching menawarkan pengalaman pendakian yang menyeronokkan dan pemandangan indah dari tingkat ke tingkat.</p>
                        <a href="#" class="mt-4 inline-block text-sm font-medium text-green-700 hover:underline">Lihat Penuh →</a>
                    </div>

                    <!-- Bahagian Blogger -->
                    <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                        <img src="{{ asset('img/3.png') }}" alt="Wani" class="size-10 rounded-full bg-gray-50" />
                        <div class="text-sm/6">
                        <p class="font-semibold text-gray-900">
                            <a href="#">
                            <span class="absolute inset-0"></span>
                            Wani Abdullah
                            </a>
                        </p>
                        <p class="text-gray-600">Penulis Blog</p>
                        </div>
                    </div>
                </article>

                <!-- Artikel 1 -->
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <img src="{{ asset('img/kanching.jpg') }}" alt="Air Terjun Kanching" class="rounded-lg w-full h-48 object-cover mb-4" />
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2025-08-01" class="text-gray-500">1 Ogos 2025</time>
                        <span class="bg-green-100 text-green-700 px-3 py-1.5 rounded-full text-xs font-medium">Alam Semula Jadi</span>
                    </div>
                    <div class="grow">
                        <h3 class="mt-3 text-lg font-semibold text-gray-900 group-hover:text-green-700">
                            Air Terjun Kanching: Keindahan 7 Tingkat
                        </h3>
                        <p class="mt-3 text-sm text-gray-600">Terletak berhampiran Rawang, Air Terjun Kanching menawarkan pengalaman pendakian yang menyeronokkan dan pemandangan indah dari tingkat ke tingkat.</p>
                        <a href="#" class="mt-4 inline-block text-sm font-medium text-green-700 hover:underline">Lihat Penuh →</a>
                    </div>

                    <!-- Bahagian Blogger -->
                    <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                        <img src="{{ asset('img/3.png') }}" alt="Wani" class="size-10 rounded-full bg-gray-50" />
                        <div class="text-sm/6">
                        <p class="font-semibold text-gray-900">
                            <a href="#">
                            <span class="absolute inset-0"></span>
                            Wani Abdullah
                            </a>
                        </p>
                        <p class="text-gray-600">Penulis Blog</p>
                        </div>
                    </div>
                </article>

                <!-- Artikel 1 -->
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <img src="{{ asset('img/kanching.jpg') }}" alt="Air Terjun Kanching" class="rounded-lg w-full h-48 object-cover mb-4" />
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2025-08-01" class="text-gray-500">1 Ogos 2025</time>
                        <span class="bg-green-100 text-green-700 px-3 py-1.5 rounded-full text-xs font-medium">Alam Semula Jadi</span>
                    </div>
                    <div class="grow">
                        <h3 class="mt-3 text-lg font-semibold text-gray-900 group-hover:text-green-700">
                            Air Terjun Kanching: Keindahan 7 Tingkat
                        </h3>
                        <p class="mt-3 text-sm text-gray-600">Terletak berhampiran Rawang, Air Terjun Kanching menawarkan pengalaman pendakian yang menyeronokkan dan pemandangan indah dari tingkat ke tingkat.</p>
                        <a href="#" class="mt-4 inline-block text-sm font-medium text-green-700 hover:underline">Lihat Penuh →</a>
                    </div>

                    <!-- Bahagian Blogger -->
                    <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                        <img src="{{ asset('img/3.png') }}" alt="Wani" class="size-10 rounded-full bg-gray-50" />
                        <div class="text-sm/6">
                        <p class="font-semibold text-gray-900">
                            <a href="#">
                            <span class="absolute inset-0"></span>
                            Wani Abdullah
                            </a>
                        </p>
                        <p class="text-gray-600">Penulis Blog</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
