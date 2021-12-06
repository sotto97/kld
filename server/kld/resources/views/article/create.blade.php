@extends('layouts.app')

@section('content')
<div class="container w-full">
    <form action="{{ 'article.store' }}" method="post">
        @csrf
        <table class="w-full">
            <tr>
                <th class="w-1/4">クライアント</th>
                <td class="w-3/4">
                    <select name="" id="" class="form-control mb-2">
                        <option value="">K00293</option>
                        <option value="">T99870</option>
                        <option value="">I00982</option>
                    </select>
                </td>
            </tr>
            <tr class="">
                <th class="w-1/4">作成者</th>
                <td class="w-3/4">
                    <select name="" id="" class="form-control mb-2">
                        <option value="">下村</option>
                        <option value="">和田</option>
                        <option value="">小原</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th class="w-1/4">納期</th>
                <td class="w-3/4"><input type="date" class="form-control mb-2"></td>
            </tr>
            <tr class="">
                <th class="w-1/4">カテゴリー</th>
                <td class="w-3/4">
                    <select name="" id="" class="form-control mb-2">
                        <option value="">アットリンク</option>
                        <option value="">WEB予約</option>
                        <option value="">DearBaby</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th class="w-1/4">件名</th>
                <td class="w-3/4">
                    <input type="text" class="form-control mb-2">
                </td>
            </tr>
            <tr>
                <th class="w-1/4">依頼内容</th>
                <td class="w-3/4">
                    <textarea class="form-control mb-2"></textarea>
                </td>
            </tr>
            <tr>
                <th class="w-1/4">調査概要</th>
                <td class="w-3/4">
                    <textarea class="form-control mb-2"></textarea>
                </td>
            </tr>
            <tr>
                <th class="w-1/4">CSへの回答</th>
                <td class="w-3/4">
                    <textarea class="form-control mb-2"></textarea>
                </td>
            </tr>
            <tr>
                <th class="w-1/4">ステータス</th>
                <td class="w-3/4">
                    <select name="" id="" class="form-control mb-2">
                        <option value="">対応中</option>
                        <option value="">下書き</option>
                        <option value="">完了</option>
                    </select>
                </td>
            </tr>
        </table>
        <div class="w-3/4 mx-auto my-2">
            <input type="submit" value="登録する" class="bg-gray-700 hover:bg-gray-500 rounded-full text-white w-full p-2">
        </div>
    </form>
</div>
@endsection
