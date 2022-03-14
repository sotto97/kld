@extends('layouts.app')

@section('content')
<div class="container flex items-center py-56">
    @if (Route::has('login'))
    <section id="left" class="w-0 md:w-1/2">
        <img src="{{ asset('img/svg/maintenance.svg') }}" width="80%" class="mx-auto">
    </section>
    <section id="right" class="w-full md:w-1/2 text-center">
        <div id="explain">
            <h2 class="text-xl font-semibold">保守DB prod.開発1</h2>
            <p class="py-6">二次保守として調査した内容を<br>チームのナレッジとして貯めていくツール</p>
        </div>
        @auth
        <div id="home" class="w-1/2 px-4 py-2 mx-auto bg-indigo-500 hover:bg-indigo-600 text-white transition hover:text-white hover:no-underline rounded-lg">
            <a href="{{ route('home') }}" class=" hover:text-white hover:no-underline">ホーム</a>
        </div>
        @else
        <div class="mb-2">
            <a href="{{ route('login') }}" class=" hover:text-white hover:no-underline">
                <button id="login" class="w-1/2 px-4 py-2 mx-auto bg-indigo-500 hover:bg-indigo-600 text-white transition rounded-lg">
                    ログイン
                </button>
            </a>
        </div>
        @if (Route::has('register'))
        <div class="mt-2">
            <a href="{{ route('register') }}" class=" hover:text-white hover:no-underline">
                <button id="register" class="w-1/2 px-4 py-2 mx-auto bg-indigo-500 hover:bg-indigo-600 text-white transition rounded-lg">
                    ユーザー登録
                </button>
            </a>
        </div>
        @endif
        @endauth
    </section>
    @endif
</div>
@endsection