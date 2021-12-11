@extends('layouts.app')

@section('content')
<div class="container w-full">
    <div class="">
        <a href="{{ route('category.create') }}" class="">
            <p class="w-1/2 text-center py-2 mx-auto bg-gray-700 text-white rounded-full">カテゴリを登録する</p>
        </a>
    </div>
    <div class="">
        <a href="{{ route('article.create') }}" class="">
            <p class="w-1/2 text-center py-2 mx-auto bg-gray-700 text-white rounded-full">今日のナレッジを登録する</p>
        </a>
    </div>
    <table class="table table-hover table-dark text-white">
        <thead class="w-full">
            <tr>
                <th class="w-4/12">ID</th>
                <th class="w-4/12">カテゴリ名</th>
                <th class="w-4/12"></th>
            </tr>
        </thead>
        <tbody class="text-left">
            <tr>
                <td>1</td>
                <td>デモクリニック</td>
                <td>
                    <p class="transition mb-0 duration-500 w-full bg-green-500 text-center rounded-full">対応中</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
