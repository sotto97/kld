@extends('layouts.app')

@section('content')
<section id="content" class="container w-full">
    <div class="">
        <a href="{{ route('client.create') }}" class="">
            <p class="w-1/2 text-center py-2 mx-auto bg-gray-700 text-white rounded-full">クライアント新規登録</p>
        </a>
    </div>
    <section id="categories" class="pt-2">
        <table class="table table-hover table-dark text-white">
            <thead class="w-full">
                <tr>
                    <th class="w-4/12">Client ID</th>
                    <th class="w-4/12">Name</th>
                    <th class="w-2/12"></th>
                    <th class="w-2/12"></th>
                </tr>
            </thead>
            <tbody class="text-left">
                @foreach ($clients as $client)
                <tr class="">
                    <td>{{ $client->client_id }}</td>
                    <td>{{ $client->name }}</td>
                    <td class="text-center">
                        <a href="{{ route('client.edit', ['id'=> $client->id]) }}">
                            <button class="bg-teal-500 hover:bg-teal-600 text-white py-1 w-1/2 mx-auto rounded-full">edit</button>
                        </a>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('client.delete', ['id'=>$client->id] ) }}" method="post">
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
@endsection