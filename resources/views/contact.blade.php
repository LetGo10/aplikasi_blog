@extends('layouts.app')

@section('content')
    <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
        <!-- Background gradient -->
        <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
            class="relative left-1/2 -z-10 aspect-[1155/678] w-[72.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-pink-300 to-indigo-400 opacity-30 sm:left-[calc(50%-40rem)] sm:w-[125rem]">
            </div>
        </div>

        <!-- Heading -->
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Hubungi Kami</h2>
            <p class="mt-2 text-lg text-gray-600">Ada pertanyaan atau cadangan destinasi menarik? Kami ingin mendengarnya!</p>
        </div>

        <!-- Contact Form -->
        <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
                <label for="first-name" class="block text-sm font-semibold text-gray-900">Nama Pertama</label>
                <div class="mt-2.5">
                <input id="first-name" name="first_name" type="text" required
                    class="block w-full rounded-md border border-gray-300 px-3.5 py-2 text-base text-gray-900 shadow-sm placeholder-gray-400 focus:ring-2 focus:ring-indigo-600 focus:outline-none" />
                </div>
            </div>
            <div>
                <label for="last-name" class="block text-sm font-semibold text-gray-900">Nama Akhir</label>
                <div class="mt-2.5">
                <input id="last-name" name="last_name" type="text" required
                    class="block w-full rounded-md border border-gray-300 px-3.5 py-2 text-base text-gray-900 shadow-sm placeholder-gray-400 focus:ring-2 focus:ring-indigo-600 focus:outline-none" />
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-semibold text-gray-900">Emel</label>
                <div class="mt-2.5">
                <input id="email" name="email" type="email" autocomplete="email" required
                    class="block w-full rounded-md border border-gray-300 px-3.5 py-2 text-base text-gray-900 shadow-sm placeholder-gray-400 focus:ring-2 focus:ring-indigo-600 focus:outline-none" />
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block text-sm font-semibold text-gray-900">Mesej</label>
                <div class="mt-2.5">
                <textarea id="message" name="message" rows="4" required
                    class="block w-full rounded-md border border-gray-300 px-3.5 py-2 text-base text-gray-900 shadow-sm placeholder-gray-400 focus:ring-2 focus:ring-indigo-600 focus:outline-none"></textarea>
                </div>
            </div>
            <div class="flex gap-x-4 sm:col-span-2">
                <input type="checkbox" id="agree" name="agree" required class="mt-1" />
                <label for="agree" class="text-sm text-gray-600">
                Saya bersetuju dengan <a href="#" class="text-indigo-600 font-semibold">dasar privasi</a>.
                </label>
            </div>
            </div>

            <div class="mt-10">
            <button type="submit"
                class="w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow hover:bg-indigo-500 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Hantar Mesej
            </button>
            </div>
        </form>
    </div>
@endsection
