<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>保守DB</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/vue-select@latest"></script>
    <link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="flex flex-col min-h-screen">
        <nav class="navbar navbar-expand-md navbar-light bg-indigo-500 shadow-sm sticky top-0 z-10">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ route('article.index') }}">
                    保守DB
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="w-full text-center text-white font-semibold">
                    @include('layouts.title')
                </div>

                <div class="collapse navbar-collapse w-full" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item  text-indigo-500" href="{{ route('client.index') }}">
                                    {{ __('クライアント一覧') }}
                                </a>
                                <a class="dropdown-item  text-indigo-500" href="{{ route('category.index') }}">
                                    {{ __('カテゴリ一覧') }}
                                </a>
                                <a class="dropdown-item  text-indigo-500" href="{{ route('article.index') }}">
                                    {{ __('記事一覧') }}
                                </a>
                                <a class="dropdown-item  text-indigo-500" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('ログアウト') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- mainのviewは全てここを共通としている --}}
        <main class="flex-grow z-0">
            @yield('content')
        </main>

        {{-- footer layoutに登録するかは検討中 --}}
        <footer class=" w-full bg-indigo-500 flex justify-center h-12 text-white m-auto sticky bottom-0 z-10">
            <div class='flex items-center'>
                <p>offshore.com</p>
            </div>
        </footer>
    </div>
</body>

</html>