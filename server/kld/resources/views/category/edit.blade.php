@extends('layouts.app')

@section('content')
<div id="editCategory" class="container w-full">
    <form @submit.prevent='UpdateCategory'>
        @csrf
        <table class="w-full">
            <tr>
                <th class="w-1/4">カテゴリ</th>
                <td class="w-3/4">
                    <input v-model='category_name' type="text" class="form-control" name="name">
                </td>
            </tr>
        </table>
        <div class="w-3/4 mx-auto my-2">
            <input type="submit" value="登録する" class="bg-gray-700 hover:bg-gray-500 rounded-full text-white w-full p-2">
        </div>
    </form>
</div>

<script>
    var app = new Vue({
        el: "#editCategory",
        data:{
            category_name: '{{ $category->name }}',
        },
        methods: {
            UpdateCategory() {
                axios.post('/category/update/' + '{{$category->id}}', {
                    category_name:  this.category_name
                })
                .then(response => {
                    console.log('更新に成功しました。');
                    window.location.href = '/category';
                })
                .catch(error => {
                    console.log('更新に失敗しました。');
                })
            }
        }
    })
</script>
@endsection