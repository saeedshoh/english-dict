<nav class="relative px-4 py-4 flex justify-between items-center bg-white">
    <a class="text-3xl font-bold leading-none" href="/">
        <img src="/logo.png" width="40">
    </a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-blue-600 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-[90%] lg:space-x-6">
        <li><a class="text-sm {{ request()->routeIs('list') ? 'text-blue-600 font-bold' : 'text-gray-400' }} hover:text-gray-500" href="/">Словари - {{ $rows->total_rows }}</a></li>
        <x-separate />
        <li><a class="text-sm {{ request()->routeIs('random') ? 'text-blue-600 font-bold' : 'text-gray-400' }} hover:text-gray-500 " href="{{ route('random') }}">Случайное слово</a></li>
        <x-separate />
        <li><a class="text-sm {{ request()->routeIs('dicts.new') ? 'text-blue-600 font-bold' : 'text-gray-400' }} hover:text-gray-500" href="{{ route('dicts.new') }}">Неизученные - {{ $rows->favorite_rows }}</a></li>
        <x-separate />
        <li><a class="text-sm {{ request()->routeIs('favorite.show') ? 'text-blue-600 font-bold' : 'text-gray-400' }} hover:text-gray-500 " href="{{ route('favorite.show') }}">Случайное неизученное слово</a></li>
        <x-separate />
        <li><a class="text-sm {{ request()->routeIs('latest') ? 'text-blue-600 font-bold' : 'text-gray-400' }} hover:text-gray-500 " href="{{ route('latest') }}">Показать по одному</a></li>
        <x-separate />
        <li><a class="text-sm {{ request()->routeIs('create') ? 'text-blue-600 font-bold' : 'text-gray-400' }}" href="{{ route('create') }}">Добавить</a></li>
    </ul>
</nav>
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="/">
                <img src="/logo.png" width="40">
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="block {{ request()->routeIs('list') ? 'text-blue-600 font-bold' : 'text-gray-400' }} p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('list') }}">Списка -
                        {{ $rows->total_rows }}</a>
                </li>


                <li class="mb-1">
                    <a class="block {{ request()->routeIs('dicts.new') ? 'text-blue-600 font-bold' : 'text-gray-400' }} p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                        href="{{ route('dicts.new') }}">Неизученные - {{ $rows->favorite_rows }}</a>
                </li>
                <li class="mb-1">
                    <a class="block {{ request()->routeIs('favorite.show') ? 'text-blue-600 font-bold' : 'text-gray-400' }} p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                        href="{{ route('favorite.show') }}">Случайное неизученное слово</a>
                </li>


                <li class="mb-1">
                    <a class="block p-4 {{ request()->routeIs('create') ? 'text-blue-600 font-bold' : 'text-gray-400' }} text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('create') }}">Добавить</a>
                </li>
                <li class="mb-1">
                    <a class="block {{ request()->routeIs('random') ? 'text-blue-600 font-bold' : 'text-gray-400' }} p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('random') }}">Случайное
                        слово</a>
                </li>

                <li class="mb-1">
                    <a class="block {{ request()->routeIs('latest') ? 'text-blue-600 font-bold' : 'text-gray-400' }} p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="{{ route('latest') }}">Показать по
                        одному</a>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6">
                <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="#">Sign in</a>
                <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" href="#">Sign Up</a>
            </div>
            <p class="my-4 text-xs text-center text-gray-400">
                <span>Copyright © 2021</span>
            </p>
        </div>
    </nav>
</div>

<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
</script>
