@extends('layouts.app')

@section('content')
<div class="container items-center py-72">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ダッシュボード') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('すでにログイン済みです') }}
                    <div class="w-1/5 pt-2">
                        <a href="{{ route('article.index') }}" class="hover:no-underline">
                            <p
                                class="bg-indigo-500 hover:bg-indigo-600 p-2 px-4 rounded-lg text-center text-white transition">
                                ナレッジ一覧へ
                            </p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection