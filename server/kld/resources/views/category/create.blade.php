@extends('layouts.app')

@section('content')
<div id="addCategory" class="container items-center py-80">
    <form @submit.prevent="addNewCategory">
        @csrf
        <table class="w-full">
            {{-- バリデーションエラーがあった場合のメッセージ表示 --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <tr>
                <th class="w-1/4">カテゴリ</th>
                <td class="w-3/4">
                    <input v-model="category_name" type="text" class="form-control" name="category_name">
                </td>
            </tr>
        </table>
        <div class="w-3/4 mx-auto my-2">
            <input type="submit" value="登録する"
                class="bg-gray-700 hover:bg-gray-500 rounded-full text-white w-full p-2 transition">
        </div>
    </form>
    {{-- <test></test> --}}
</div>
<script>
    var app = new Vue({
        el: "#addCategory",
        data: {
            category_name: '',
        },
        methods: {
            addNewCategory() {
                axios.post('/category/store', {
                    category_name: this.category_name
                })
                .then(response => {
                    console.log('カテゴリ登録に成功しました。');
                    window.location.href = '/category';
                })
                .catch(error => {
                    console.log('カテゴリ登録に失敗しました。');
                })
            }
        }
    })
</script>

@endsection