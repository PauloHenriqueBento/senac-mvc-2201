@extends('layouts.app')
@section('title', 'Lista Cliente')
@section('sidebar')

    @parent
    <hr>
@endsection

@section('content')
    <table class="table container">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Endereço</td>
            <td>Telefone</td>
            <td>E-mail</td>
        </tr>
        @foreach ($clients as $client )
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->nome}}</td>
                <td>{{$client->endereco}}</td>
                <td>{{$client->telefone}}</td>
                <td>{{$client->email}}</td>
            </tr>

        @endforeach

    </table>
@endsection
