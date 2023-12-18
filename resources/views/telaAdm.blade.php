<!-- resources/views/telaAdm.blade.php -->

@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Lista de Produtos</h1>
    <p class="lead">Bem-vindo à nossa loja virtual.</p>
    <a href="{{ route('produtos.Adicionar') }}" class="btn btn-primary btn-lg">Adicionar Produto</a>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</div>

<table class="table">
    <thead>
        <tr>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Ações</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
        <tr>
            <td>
                @if ($produto->imagem)
                <img src="{{ asset('storage/' . $produto->imagem) }}" alt="Imagem do Produto" style="max-width: 50px;">
                @else
                Sem imagem
                @endif
            </td>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->descricao }}</td>
            <td>{{ $produto->preco }}</td>

            <td>
                <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-info">Detalhes</a>
                <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>



            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection