@extends('layouts.app')

@section('content')
<div class="container items-center py-32">
    <form action="{{ route('article.update', ['id' => $article->id])  }}" method="post">
        @csrf
        <table class="w-full">
            <tr>
                <th class="w-1/4">クライアント</th>
                <td class="w-3/4">
                    <select name="client_id" id="" class="form-control mb-2">
                        @foreach ($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr class="">
                <th class="w-1/4">作成者</th>
                <td class="w-3/4">
                    <select name="user_id" id="" class="form-control mb-2">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th class="w-1/4">納期</th>
                <td class="w-3/4"><input type="date" name="limit_dt" class="form-control mb-2" value="{{ $article->limit_dt }}"></td>
            </tr>
            <tr class="">
                <th class="w-1/4">カテゴリー</th>
                <td class="w-3/4">
                    <select name="category_id" id="" class="form-control mb-2">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th class="w-1/4">件名</th>
                <td class="w-3/4">
                    <input type="text" name="subject" class="form-control mb-2" value="{{ $article->subject }}">
                </td>
            </tr>
            <tr>
                <th class="w-1/4">依頼内容</th>
                <td class="w-3/4">
                    <textarea name="order_detail" class="form-control mb-2">{{ $article->order_detail }}</textarea>
                </td>
            </tr>
            <tr>
                <th class="w-1/4">調査概要</th>
                <td class="w-3/4">
                    <textarea name="report" class="form-control mb-2">{{ $article->report }}</textarea>
                </td>
            </tr>
            <tr>
                <th class="w-1/4">CSへの回答</th>
                <td class="w-3/4">
                    <textarea name="answer" class="form-control mb-2">{{$article->answer}}</textarea>
                </td>
            </tr>
            <tr>
                <th class="w-1/4">ステータス</th>
                <td class="w-3/4">
                    <select name="status" id="" class="form-control mb-2">
                        <option value="0">未着手</option>
                        <option value="1">対応中</option>
                        <option value="2">下書き</option>
                        <option value="3">完了</option>
                    </select>
                </td>
            </tr>
        </table>
        <div class="w-3/4 mx-auto my-2">
            <input type="submit" value="更新する" class="bg-gray-700 hover:bg-gray-500 rounded-lg text-white w-full p-2 transition">
        </div>
    </form>
</div>

@endsection