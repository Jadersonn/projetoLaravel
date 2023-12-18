<!-- resources/views/produtos/telaDetalhes.blade.php -->

@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<div class="jumbotron">
    <h1 class="display-4">{{ $produto->nome }}</h1>
    <p class="lead">{{ $produto->descricao }}</p>
</div>


<div class="card">
    <div class="card-body">
        <h5 class="card-title">Detalhes do Produto</h5>
        <p class="card-text"><strong>Nome:</strong> {{ $produto->nome }}</p>
        <p class="card-text"><strong>Descrição:</strong> {{ $produto->descricao }}</p>
        <p class="card-text"><strong>Preço:</strong> R$ {{ $produto->preco }}</p>

        @if ($produto->imagem)
        <img src="{{ asset('storage/' . $produto->imagem) }}" alt="Imagem do Produto" style="max-width: 200px;">
        @else
        <p>Sem imagem disponível</p>
        @endif
        <br><br>
    </div>
</div>

<a href="{{ route('produtos.index') }}" class="btn btn-primary mt-3">Voltar para a Lista</a>
@endsection