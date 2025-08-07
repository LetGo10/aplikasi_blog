@extends('layouts.app')

@section('content')
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
                    <img src="{{ asset('img/kanching.jpg') }}" alt="Air Terjun" class="rounded-lg shadow-md w-full" />
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
@endsection
