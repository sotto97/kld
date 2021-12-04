@extends('layouts.app')

@section('content')
<div class="container w-full">
    <div class="">
        <a href="{{ route('article.create') }}" class="">
            <p class="w-1/2 text-center py-2 mx-auto bg-gray-700 text-white rounded-full">今日のナレッジを登録する</p>
        </a>
    </div>
    <table class="table table-hover table-dark text-white">
        <thead class="w-full">
            <tr>
                <th class="w-1/12">ID</th>
                <th class="w-2/12">クライアント名</th>
                <th class="w-6/12">タイトル</th>
                <th class="w-2/12">日付</th>
                <th class="w-1/12">作成者</th>
            </tr>
        </thead>
        <tbody class="text-left">
            <tr>
                <td>K00316</td>
                <td>デモクリニック</td>
                <td>未決済一覧の削除</td>
                <td>2021-12-04</td>
                <td>下村</td>
            </tr>
            <tr>
                <td>K00316</td>
                <td>デモクリニック</td>
                <td>未決済一覧の削除</td>
                <td>2021-12-04</td>
                <td>下村</td>
            </tr>
            <tr>
                <td>K00316</td>
                <td>デモクリニック</td>
                <td>未決済一覧の削除</td>
                <td>2021-12-04</td>
                <td>下村</td>
            </tr>
            <tr>
                <td>K00316</td>
                <td>デモクリニック</td>
                <td>未決済一覧の削除</td>
                <td>2021-12-04</td>
                <td>下村</td>
            </tr>
            <tr>
                <td>K00316</td>
                <td>デモクリニック</td>
                <td>未決済一覧の削除</td>
                <td>2021-12-04</td>
                <td>下村</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
