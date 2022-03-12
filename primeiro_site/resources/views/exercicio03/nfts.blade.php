@extends('exercicio03.layouts.head')
@section('title', 'home')
@section('navbar')


@section('content')
@if ($nome == 'Tendencias')
    <h1 class="text-center">{{$nome}}</h1>
@else
<h1 class="text-center">Default nome</h1>
@endif

<div>
    <ul>
        @foreach ($nfts as $nft)
            <li class="text-center" style="border: 2px solid black; list-style: none">
                <img src="{{$nft['img']}}" width="300px">
                <h2>{{$nft['nome']}}</h2>
                <p>{{$nft['descricao']}}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection
