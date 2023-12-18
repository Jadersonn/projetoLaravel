<!-- resources/views/produtos/telaComprar.blade.php -->

@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<div class="jumbotron">
    <h1 class="display-4">Comprar Produto</h1>
    <p class="lead">Você está prestes a comprar o seguinte produto:</p>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $produto->nome }}</h5>
            <p class="card-text">{{ $produto->descricao }}</p>
            <p class="card-text">Preço: R$ {{ $produto->preco }}</p>

            <form action="{{ route('produtos.efetuarCompra', $produto->id) }}" method="post">
                @csrf
                @method('post')
                <button type="submit" class="btn btn-success">Confirmar Compra</button>
            </form>

            <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</div>
@endsection
