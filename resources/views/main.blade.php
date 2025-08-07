<!DOCTYPE html>
<html lang="ms">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Air Terjun di Selangor</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-white text-gray-900">

    <!-- Header -->
    <header class="bg-green-600 shadow">
      <div class="mx-auto max-w-7xl px-6 py-4 flex items-center justify-between">
        <a href="#" class="text-xl font-bold text-white">JelajahSelangor</a>
        <nav class="space-x-4">
          <a href="{{ url('main') }}" class="text-white hover:underline">Laman Utama</a>
          <a href="{{ url('about_us') }}" class="text-white hover:underline">Tentang Kami</a>
          <a href="#" class="bg-white text-green-700 px-4 py-2 rounded-md text-sm font-medium hover:bg-green-100 transition">Login</a>
        </nav>
      </div>
    </header>

    <!-- Blog Section -->
    <section class="bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
          <h2 class="text-4xl font-semibold tracking-tight text-green-800 sm:text-5xl">Air Terjun di Selangor</h2>
          <p class="mt-2 text-lg/8 text-gray-600">Jelajahi keindahan alam semula jadi dan destinasi air terjun yang menakjubkan di sekitar Selangor.</p>
        </div>

        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

          <!-- Artikel 1 -->
          <article class="flex max-w-xl flex-col items-start justify-between">
            <img src="{{ asset('kanching.jpg') }}" alt="Air Terjun Kanching" class="rounded-lg w-full h-48 object-cover mb-4" />
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
                <img src="{{ asset('3.png') }}" alt="Wani" class="size-10 rounded-full bg-gray-50" />
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

          <!-- Artikel 2 -->
          <article class="flex max-w-xl flex-col items-start justify-between">
            <img src="{{ asset('pisang.jpg') }}" alt="Air Terjun Kanching" class="w-full h-48 object-cover rounded-lg mb-4" />
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2025-07-25" class="text-gray-500">25 Julai 2025</time>
              <span class="bg-green-100 text-green-700 px-3 py-1.5 rounded-full text-xs font-medium">Rekreasi</span>
            </div>
            <div class="grow">
              <h3 class="mt-3 text-lg font-semibold text-gray-900 group-hover:text-green-700">
                Sungai Pisang: Pengembaraan Merentasi Terowong
              </h3>
              <p class="mt-3 text-sm text-gray-600">Pengalaman unik merentasi terowong sebelum tiba ke air terjun. Sesuai untuk aktiviti hujung minggu bersama rakan-rakan.</p>
              <a href="#" class="mt-4 inline-block text-sm font-medium text-green-700 hover:underline">Lihat Penuh →</a>
            </div>

            <!-- Bahagian Blogger -->
            <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                <img src="{{ asset('2.png') }}" alt="Wani" class="size-10 rounded-full bg-gray-50" />
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

          <!-- Artikel 3 -->
          <article class="flex max-w-xl flex-col items-start justify-between">
            <img src="{{ asset('lata.jpg') }}" alt="Lata Medang" class="rounded-lg w-full h-48 object-cover mb-4" />
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2025-07-10" class="text-gray-500">10 Julai 2025</time>
              <span class="bg-green-100 text-green-700 px-3 py-1.5 rounded-full text-xs font-medium">Perkhemahan</span>
            </div>
            <div class="grow">
              <h3 class="mt-3 text-lg font-semibold text-gray-900 group-hover:text-green-700">
                Lata Medang: Lokasi Popular Buat Pendaki
              </h3>
              <p class="mt-3 text-sm text-gray-600">Salah satu lokasi terbaik untuk pendakian dan berkelah, Lata Medang memukau dengan aliran air yang jernih dan sejuk.</p>
              <a href="#" class="mt-4 inline-block text-sm font-medium text-green-700 hover:underline">Lihat Penuh →</a>
            </div>

            <!-- Bahagian Blogger -->
            <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                <img src="{{ asset('1.png') }}" alt="Wani" class="size-10 rounded-full bg-gray-50" />
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

    <!-- Footer -->
    <footer class="bg-green-700 text-white">
      <div class="mx-auto max-w-7xl px-6 py-10 lg:px-8">
        <div class="flex flex-col sm:flex-row justify-between items-center text-sm">
          <p>&copy; 2025 JelajahSelangor. Hak cipta terpelihara.</p>
          <div class="flex space-x-4 mt-4 sm:mt-0">
            <a href="#" class="hover:underline">Youtube</a>
            <a href="#" class="hover:underline">Instagram</a>
            <a href="#" class="hover:underline">Twitter</a>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>
