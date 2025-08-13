<header class="bg-green-600 shadow">
    <div class="mx-auto max-w-7xl px-6 py-4 flex items-center justify-between">
    <a href="#" class="text-xl font-bold text-white">JelajahSelangor</a>
    <nav class="space-x-4">
        <a href="{{ route('main') }}" class="text-white hover:underline {{ request()->routeIs('main') ? 'font-bold underline' : '' }}">Laman Utama</a>
        <a href="{{ route('about') }}" class="text-white hover:underline {{ request()->routeIs('about') ? 'font-bold underline' : '' }}">Tentang Kami</a>
        <a href="{{ route('posts.index') }}" class="text-white hover:underline {{ request()->routeIs('posts.index') ? 'font-bold underline' : '' }}">Destinasi</a>
        <a href="{{ route('contact') }}" class="text-white hover:underline {{ request()->routeIs('contact') ? 'font-bold underline' : '' }}">Hubungi Kami</a>
        <a href="#" class="bg-white text-green-700 px-4 py-2 rounded-md text-sm font-medium hover:bg-green-100 transition">Login</a>
    </nav>
    </div>
</header>
