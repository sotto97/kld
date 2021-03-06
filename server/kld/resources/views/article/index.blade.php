@extends('layouts.app')

@section('content')
<div class="container w-full">
    @include('layouts.h_button')
    <table class="table table-hover table-dark text-white">
        <thead class="w-full">
            <tr class="text-center">
                <th class="w-2/12">クライアント名</th>
                <th class="w-1/12">カテゴリ</th>
                <th class="w-4/12">タイトル</th>
                <th class="w-1/12">日付</th>
                <th class="w-1/12">作成者</th>
                <th class="w-1/12">状況</th>
                <th class="w-1/12"></th>
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
                <td>
                    <a href="{{ route('article.edit', ['id' => $article->id]) }}" class="hover:text-white">
                        <i class="fa-solid fa-pen-to-square text-lg hover:text-gray-500"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection