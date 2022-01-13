@extends('layouts.app')

@section('content')
<section id="content" class="container w-full">
    <div class="">
        <a href="{{ route('category.create') }}" class="">
            <p class="w-1/2 text-center py-2 mx-auto bg-gray-700 text-white rounded-full">Add New Category</p>
        </a>
    </div>
    <section id="categories" class="pt-2">
        <table class="table table-hover table-dark text-white">
            <thead class="w-full">
                <tr>
                    <th class="w-4/12">ID</th>
                    <th class="w-4/12">Name</th>
                    <th class="w-4/12"></th>
                </tr>
            </thead>
            <tbody class="text-left">
                @foreach ($categories as $category)
                <tr class="">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td class="text-center"><button class="bg-teal-500 hover:bg-teal-600 text-white py-1 w-1/2 mx-auto rounded-full">edit</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</section>
@endsection