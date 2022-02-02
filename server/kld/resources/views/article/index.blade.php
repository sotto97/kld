@extends('layouts.app')

@section('content')
<div class="container w-full">
    <section id='nav' class="flex w-full py-4">
        <div class="flex1 w-1/3 text-center text-indigo-500">
            <a href="{{ route('article.create') }}" class="hover:no-underline hover:text-white">
                <button
                    class="w-2/3 py-2 mx-auto border-2 border-indigo-500 hover:text-white hover:bg-indigo-500 transition rounded-full">
                    今日のナレッジを登録する
                </button>
            </a>
        </div>
        <div class="flex1 w-1/3 text-center text-indigo-500">
            <a href="{{ route('category.create') }}" class="hover:no-underline hover:text-white">
                <button
                    class="w-2/3 py-2 mx-auto border-2 border-indigo-500 hover:text-white hover:bg-indigo-500 transition rounded-full">
                    カテゴリを登録する
                </button>
            </a>
        </div>
        <div class="flex1 w-1/3 text-center text-indigo-500">
            <a href="{{ route('client.create') }}" class="hover:no-underline hover:text-white">
                <button
                    class="w-2/3 py-2 mx-auto border-2 border-indigo-500 hover:text-white hover:bg-indigo-500 transition rounded-full">
                    クライアントを登録する
                </button>
            </a>
        </div>
    </section>

    <table class="table table-hover table-dark text-white">
        <thead class="w-full">
            <tr class="text-center">
                <th class="w-2/12">クライアント名</th>
                <th class="w-1/12">カテゴリ</th>
                <th class="w-5/12">タイトル</th>
                <th class="w-1/12">日付</th>
                <th class="w-1/12">作成者</th>
                <th class="w-1/12">状況</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($articles as $article)
            <tr>
                <td>{{ $article->client->name }}</td>
                <td>{{ $article->category->name }}</td>
                <td>{{ $article->subject }}</td>
                <td>{{ $article->limit_dt }}</td>
                <td>{{ $article->user->name }}</td>
                @if ($article->status == 0)
                <td class="">
                    <button class="bg-yellow-600 p-1 rounded-lg">未着手</button>
                </td>
                @elseif($article->status == 1)
                <td class="">
                    <button class="bg-green-600 p-1 rounded-lg">対応中</button>
                </td>
                @elseif($article->status == 2)
                <td class="">
                    <button class="bg-gray-600 p-1 rounded-lg">下書き</button>
                </td>
                @elseif($article->status == 3)
                <td class="">
                    <button class="bg-blue-600 p-1 rounded-lg">完了</button>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection