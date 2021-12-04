@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <div>
                    <a href="{{ route('article.index') }}" class="hover:no-underline">
                        <p class="bg-teal-500 my-2 p-2 rounded-full text-center">
                            今日のコンディションの入力
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
