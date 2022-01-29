@extends('layouts.app')

@section('content')
<div class="container w-full">
    <form action="{{ 'article.store' }}" method="post">
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
                <td class="w-3/4"><input type="date" name="limit_dt" class="form-control mb-2"></td>
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
                    <input type="text" name="subject" class="form-control mb-2">
                </td>
            </tr>
            <tr>
                <th class="w-1/4">依頼内容</th>
                <td class="w-3/4">
                    <textarea name="order_detail" class="form-control mb-2"></textarea>
                </td>
            </tr>
            <tr>
                <th class="w-1/4">調査概要</th>
                <td class="w-3/4">
                    <textarea name="report" class="form-control mb-2"></textarea>
                </td>
            </tr>
            <tr>
                <th class="w-1/4">CSへの回答</th>
                <td class="w-3/4">
                    <textarea name="answer" class="form-control mb-2"></textarea>
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
            <input type="submit" value="登録する" class="bg-gray-700 hover:bg-gray-500 rounded-full text-white w-full p-2">
        </div>
    </form>
    <ExampleComponent></ExampleComponent>
    {{-- <div id="app">
        <v-select name="hoge" :options="options" v-model="selected"></v-select>
    </div> --}}
</div>

{{-- <script>
    const vSelect = VueSelect.VueSelect;
    import Vue from 'vue' import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css'; 
    Vue.component('v-select', vSelect);
 
    new Vue({ 
    el: '#app', 
    data: { 
        selected: '',
        options: [ 'foo', 'bar', 'baz' ] 
    } 
    })
</script> --}}

@endsection