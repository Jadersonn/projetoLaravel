<!-- resources/views/produtos/telaAdicionar.blade.php -->

@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<div class="jumbotron">
    <h1 class="display-4">Adicionar Produto</h1>
</div>

<form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="number" name="preco" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="imagem">Imagem:</label>
        <input type="file" name="imagem" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Adicionar Produto</button>
    <a href="{{ route('adm.index') }}" class="btn btn-secondary">Cancelar</a>
</form>


@endsection