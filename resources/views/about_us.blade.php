<!DOCTYPE html>
<html lang="ms">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami - JelajahSelangor</title>
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

    <section class="py-24 sm:py-32 bg-green-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="mb-16 text-center">
                <h2 class="text-4xl font-semibold text-green-800 mb-4">Tentang Kami</h2>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    <strong>JelajahSelangor</strong> ialah blog yang didedikasikan untuk meneroka dan memperkenalkan keindahan air terjun di seluruh Malaysia — terutamanya di negeri Selangor. Kami percaya bahawa keindahan alam semulajadi wajar dikongsi dan dihargai oleh semua.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <img src="{{ asset('kanching.jpg') }}" alt="Air Terjun" class="rounded-lg shadow-md w-full" />
                </div>

                <div>
                    <h3 class="text-2xl font-semibold text-green-700 mb-4">Misi Kami</h3>
                    <p class="text-gray-600">
                    Misi kami adalah untuk memberikan maklumat tepat, gambar menarik dan panduan kepada pencinta alam yang ingin meneroka air terjun tersembunyi. Kami juga menggalakkan pelancongan hijau dan pemeliharaan alam sekitar.
                    </p>
                </div>
            </div>

            <div class="mt-20 text-center">
                <h3 class="text-2xl font-semibold text-green-700 mb-4">Pasukan Kami</h3>
                <p class="text-gray-600 max-w-xl mx-auto">
                    Kami terdiri daripada sekumpulan penulis, jurugambar dan pencinta alam semulajadi yang aktif menjelajah kawasan hutan di Malaysia untuk berkongsi pengalaman kami bersama anda.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-700 text-white">
      <div class="mx-auto max-w-7xl px-6 py-10 lg:px-8">
        <div class="flex flex-col sm:flex-row justify-between items-center text-sm">
          <p>&copy; 2025 JelajahSelangor. Hak cipta terpelihara.</p>
          <div class="flex space-x-4 mt-4 sm:mt-0">
            <a href="#" class="hover:underline">YouTube</a>
            <a href="#" class="hover:underline">Instagram</a>
            <a href="#" class="hover:underline">Twitter</a>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>
