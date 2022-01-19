@extends('layouts.app')

@section('content')
<div class="container w-full">
    <section id='nav' class="flex w-full mb-2">
        <div class="flex1 w-1/3">
            <a href="{{ route('article.create') }}" class="">
                <p class="w-1/2 text-center py-2 mx-auto bg-gray-700 text-white rounded-full">今日のナレッジを登録する</p>
            </a>
        </div>
        <div class="flex1 w-1/3">
            <a href="{{ route('category.create') }}" class="">
                <p class="w-1/2 text-center py-2 mx-auto bg-gray-700 text-white rounded-full">カテゴリを登録する</p>
            </a>
        </div>
        <div class="flex1 w-1/3">
            <a href="{{ route('client.create') }}" class="">
                <p class="w-1/2 text-center py-2 mx-auto bg-gray-700 text-white rounded-full">クライアントを登録する</p>
            </a>
        </div>
    </section>
    <table class="table table-hover table-dark text-white">
        <thead class="w-full">
            <tr class="text-center">
                <th class="w-1/12">ID</th>
                <th class="w-2/12">クライアント名</th>
                <th class="w-1/12">カテゴリ</th>
                <th class="w-5/12">タイトル</th>
                <th class="w-1/12">日付</th>
                <th class="w-1/12">作成者</th>
                <th class="w-1/12">状況</th>
            </tr>
        </thead>
        <tbody class="text-left">
            <tr>
                <td>K00316</td>
                <td>デモクリニック</td>
                <td>@link</td>
                <td>未決済一覧の削除</td>
                <td>21-12-04</td>
                <td>下村</td>
                <td>
                    <p class="transition mb-0 duration-500 w-full bg-green-500 text-center rounded-full">対応中</p>
                </td>
            </tr>
            <tr>
                <td>K00316</td>
                <td>デモクリニック</td>
                <td>DearBaby</td>
                <td>未決済一覧の削除</td>
                <td>21-12-04</td>
                <td>下村</td>
                <td>
                    <p class="transition mb-0 duration-500 w-full bg-gray-400 text-center rounded-full">下書き</p>
                </td>
            </tr>
            <tr>
                <td>K00316</td>
                <td>デモクリニック</td>
                <td>DearBaby</td>
                <td>未決済一覧の削除</td>
                <td>21-12-04</td>
                <td>下村</td>
                <td>
                    <p class="transition mb-0 duration-500 w-full bg-green-500 text-center rounded-full">対応中</p>
                </td>
            </tr>
            <tr>
                <td>K00316</td>
                <td>デモクリニック</td>
                <td>EchoDiary</td>
                <td>未決済一覧の削除</td>
                <td>21-12-04</td>
                <td>下村</td>
                <td>
                    <p class="transition mb-0 duration-500 w-full bg-green-500 text-center rounded-full">対応中</p>
                </td>
            </tr>
            <tr>
                <td>K00316</td>
                <td>デモクリニック</td>
                <td>その他</td>
                <td>未決済一覧の削除</td>
                <td>21-12-04</td>
                <td>下村</td>
                <td>
                    <p class="transition mb-0 duration-500 w-full bg-blue-500 text-center rounded-full">完了</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection