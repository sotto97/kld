@extends('layouts.app')

@section('content')
<div class="container w-full">
    <form action="{{ route('client.store') }}" method="post">
        @csrf
        <table class="w-full">
            <tr>
                <th class="w-1/4">クライアントID</th>
                <td class="w-3/4">
                    <input type="text" class="form-control" name="name">
                </td>
            </tr>
            <tr>
                <th class="w-1/4">クライアント名</th>
                <td class="w-3/4">
                    <input type="text" class="form-control" name="name">
                </td>
            </tr>
        </table>
        <div class="w-3/4 mx-auto my-2">
            <input type="submit" value="登録する" class="bg-gray-700 hover:bg-gray-500 rounded-full text-white w-full p-2">
        </div>
    </form>
</div>
@endsection