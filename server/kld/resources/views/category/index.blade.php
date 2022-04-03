@extends('layouts.app')

@section('content')
<section id="CategoryIndex" class="md:container md:mx-auto w-full md:w-1/2">
    {{-- Vueのモーダルウィンドウ表示のボタン --}}
    <div class="w-full text-center py-2">
        <button type="button" @click="openModal" class="w-3/4 md:w-1/2 text-center py-2 mx-auto bg-gray-700 text-white rounded-full">カテゴリを追加する</button>
    </div>

    {{-- Vueのモーダルウィンドウ表示 --}}
    <create-category v-show="createCategoryModal" @close="createCategoryModal = false" @add="addNewCategory"></create-category>

    <section id="categories">
        <table class="table table-hover table-dark text-white w-full">
            <thead class="">
                <tr>
                    <th class="w-1/12 md:w-4/12">ID</th>
                    <th class="w-5/12 md:w-4/12">Name</th>
                    <th class="w-3/12 md:w-2/12 text-center">編集</th>
                    <th class="w-3/12 md:w-2/12 text-center">削除</th>
                </tr>
            </thead>
            <tbody class="text-left">
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('category.edit', ['id'=> $category->id]) }}">
                            <button class="bg-teal-500 hover:bg-teal-600 text-white py-0 md:py-1 w-full mx-auto rounded-lg">edit</button>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('category.delete', ['id'=>$category->id] ) }}" method="post">
                            @csrf
                            <button class="bg-red-500 hover:bg-red-600 text-white py-0 md:py-1 w-full mx-auto rounded-lg">delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</section>

<script>
    var app = new Vue({
        el: '#CategoryIndex',
        data() {
            return {
                createCategoryModal : false,
                // category_name       : "", // 子コンポーネントから渡されるのでコメントアウト
            }
        },
        methods: {
            openModal: function() {
                this.createCategoryModal = true;
            },
            closeModal: function() {
                this.createCategoryModal = false;
            },
            // 子コンポーネントから渡された category_name を引数として取得
            addNewCategory(category_name) {
                axios.post("/category/store", {
                    category_name: category_name,
                })
                .then((response) => {
                    console.log("カテゴリ登録に成功しました。");
                    window.location.href = "/category";
                })
                .catch((error) => {
                    console.log("カテゴリ登録に失敗しました。");
                });
            },
            // deleteCategory() {
            //     axios.post("/category/destroy")
            // }
        }
    })
</script>

@endsection