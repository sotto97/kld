@extends('layouts.app')

@section('content')
<div id="addClient" class="container items-center py-80">
    <form @submit.prevent="addNewClient">
        @csrf
        <table class="w-full">
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
                <th class="w-1/4">クライアントID</th>
                <td class="w-3/4">
                    <input v-model="client_id" type="text" class="form-control" name="client_id">
                </td>
            </tr>
            <tr>
                <th class="w-1/4">クライアント名</th>
                <td class="w-3/4">
                    <input v-model="client_name" type="text" class="form-control" name="client_name">
                </td>
            </tr>
        </table>
        <div class="w-3/4 mx-auto my-2">
            <input type="submit" value="登録する" class="bg-gray-700 hover:bg-gray-500 rounded-full text-white w-full p-2">
        </div>
    </form>
</div>

{{-- <add-client></add-client> --}}

<script>
    var app = new Vue({
    el: "#addClient",
    data: {
        client_id: "",
        client_name: "",
    },
    methods: {
        addNewClient() {
            axios.post("/client/store", {
                    client_id: this.client_id,
                    client_name: this.client_name,
                })
                .then((response) => {
                    console.log("登録に成功しました");
                    window.location.href = "/client";
                })
                .catch((error) => {
                    console.log("登録に失敗しました。");
                });
        },
    },
});
</script>
@endsection