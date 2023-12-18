<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('/layouts/app');
});

// Tela inicial adm
Route::get('/adm', [ProdutoController::class, 'adm'])->name('adm.index');

// Rota para comprar (separada da rota de recursos)
Route::get('/produtos/{produto}/comprar', [ProdutoController::class, 'comprar'])->name('produtos.comprar');

// Rota de exibição da tela de produtos (separada da rota de recursos)
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');

// Rota específica para adicionar produto
Route::post('/produtos/adicionar', [ProdutoController::class, 'store'])->name('produtos.store');
Route::get('/produtos/adicionar', function () {
    return view('telaAdicionar');
})->name('produtos.Adicionar');


// Você pode adicionar uma rota específica para a telaUsuario, se necessário
Route::get('/telaUsuario', function () {
    return view('telaUsuario');
})->name('telaUsuario');

Route::get('/produtos/{produtos}/comprar', [ProdutoController::class, 'telaComprar'])->name('produtos.telaComprar');

// Rota para efetuar a compra (post)
Route::post('/produtos/{produtos}/comprar', [ProdutoController::class, 'efetuarCompra'])->name('produtos.efetuarCompra');

// Rotas de recursos para ProdutoController
Route::resource('produtos', ProdutoController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);

// Rota para editar produto
Route::get('/produtos/{produto}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
// Rota para atualizar produto
Route::put('/produtos/{produto}', [ProdutoController::class, 'update'])->name('produtos.update');
