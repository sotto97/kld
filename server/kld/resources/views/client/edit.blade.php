@extends('layouts.app')

@section('content')
<div id="editClient" class="container w-full">
    <form @submit.prevent="UpdateClient">
        @csrf
        <table class="w-full">
            <tr>
                <th class="w-1/4">クライアントID</th>
                <td class="w-3/4">
                    <input v-model='client_id' type="text" class="form-control" name="client_id" value="{{ $client->client_id }}">
                </td>
            </tr>
            <tr>
                <th class="w-1/4">クライアント名</th>
                <td class="w-3/4">
                    <input v-model='client_name' type="text" class="form-control" name="name" value="{{ $client->name }}">
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
        el: '#editClient',
        data: {
            client_id: '{{$client->client_id}}',
            client_name: '{{$client->name}}',
        },
        methods: {
            UpdateClient() {
                axios.post('/client/update/' + '{{ $client->id }}', {
                    client_id: this.client_id,
                    client_name: this.client_name,
                })
                .then(response => {
                    console.log('更新に成功しました');
                    window.location.href = '/client';
                })
                .catch ( error => {
                    console.log('更新に失敗しました。');
                })
            }
        }
    })
</script>

@endsection