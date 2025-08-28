<header class="bg-green-600 shadow">
    <div class="mx-auto max-w-7xl px-6 py-4 flex items-center justify-between">
    <a href="#" class="text-xl font-bold text-white">JelajahSelangor</a>
    <nav class="space-x-4">
        <a href="{{ route('main') }}" class="text-white hover:underline {{ request()->routeIs('main') ? 'font-bold underline' : '' }}">Laman Utama</a>
        <a href="{{ route('about') }}" class="text-white hover:underline {{ request()->routeIs('about') ? 'font-bold underline' : '' }}">Tentang Kami</a>
        <a href="{{ route('posts.index') }}" class="text-white hover:underline {{ request()->routeIs('posts.index') ? 'font-bold underline' : '' }}">Destinasi</a>
        <a href="{{ route('contact') }}" class="text-white hover:underline {{ request()->routeIs('contact') ? 'font-bold underline' : '' }}">Hubungi Kami</a>
        <a href="{{ route('posts.create') }}" class="text-white hover:underline {{ request()->routeIs('posts.create') ? 'font-bold underline' : '' }}">New Post</a>
        <a href="#" class="bg-white text-green-700 px-4 py-2 rounded-md text-sm font-medium hover:bg-green-100 transition">Login</a>
    </nav>
    </div>
                <div class="flex items-center space-x-4">
                @auth
                    <span class="text-sm text-gray-600">Hello, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Log Keluar</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900 transition-colors {{ request()->routeIs('login') ? 'text-red-900 font-bold' : '' }}">Log Masuk</a>
                    <a href="{{ route('register') }}" class="bg-gray-900 text-white px-4 py-2 rounded-md text-sm hover:bg-gray-800 transition-colors {{ request()->routeIs('register') ? 'text-red-900 font-bold' : '' }}">Daftar</a>
                @endauth
            </div>
</header>
