@extends('layouts.app')

@section('content')
<section id="content" class="container w-full">
    <div class="">
        <a href="{{ route('category.create') }}" class="">
            <p class="w-1/2 text-center py-2 mx-auto bg-gray-700 text-white rounded-full">Add New Category</p>
        </a>
    </div>

    {{-- Vueのモーダルウィンドウ表示のボタン --}}
    <div class="w-full text-center">
        <button type="button" @click="openModal" class="w-1/2 text-center py-2 mx-auto bg-gray-700 text-white rounded-full">カテゴリを追加する</button>
    </div>
    {{-- Vueのモーダルウィンドウ表示 --}}
    <create-category v-show="showContent" @close="showContent = false"></create-category>

    <section id="categories" class="pt-2">
        <table class="table table-hover table-dark text-white">
            <thead class="w-full">
                <tr>
                    <th class="w-4/12">ID</th>
                    <th class="w-4/12">Name</th>
                    <th class="w-2/12"></th>
                    <th class="w-2/12"></th>
                </tr>
            </thead>
            <tbody class="text-left">
                @foreach ($categories as $category)
                <tr class="">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td class="text-center">
                        <a href="{{ route('category.edit', ['id'=> $category->id]) }}">
                            <button class="bg-teal-500 hover:bg-teal-600 text-white py-1 w-1/2 mx-auto rounded-full">edit</button>
                        </a>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('category.delete', ['id'=>$category->id] ) }}" method="post">
                            @csrf
                            <button class="bg-red-500 hover:bg-red-600 text-white py-1 w-1/2 mx-auto rounded-full">delete</button>
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
        el: '#content',
        data() {
            return {
                showContent: false,
            }
        },
        methods: {
            openModal: function() {
                this.showContent = true;
            },
            closeModal: function() {
                this.showContent = false;
            }
        }
    })
</script>
@endsection