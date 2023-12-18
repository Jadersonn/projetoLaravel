<!-- resources/views/produtos/telaEditar.blade.php -->

@extends('layouts.app') {{-- Substitua 'app' pelo nome do seu layout, se necessário --}}

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<div class="jumbotron">
    <h1 class="display-4">Editar Produto</h1>
</div>

<form action="{{ route('produtos.update', $produto->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao">{{ $produto->descricao }}</textarea>
    </div>

    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" class="form-control" id="preco" name="preco" value="{{ $produto->preco }}">
    </div>

    <div class="form-group">
        <label for="imagem">Imagem:</label>
        <input type="file" class="form-control-file" id="imagem" name="imagem">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{ route('adm.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection