<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all(); // Ou qualquer outra lógica para obter os produtos do banco de dados
        return view('produtos.index', ['produtos' => $produtos]);
    }
    public function adm()
    {
        $produtos = Produto::all(); // Ou qualquer outra lógica para obter os produtos do banco de dados
        return view('telaAdm', ['produtos' => $produtos]);
    }


    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.telaDetalhes', ['produto' => $produto]);
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('telaEditar', ['produto' => $produto]);
    }

    public function efetuarCompra($id)
    {
        $produto = Produto::findOrFail($id);

        // Remover o produto do banco de dados
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Compra efetuada com sucesso!');
    }

    public function comprar($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.telaComprar', ['produto' => $produto]);
    }




    public function update(Request $request, $id)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
            'imagem' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // opcional: adicione validação para imagens
        ]);

        // Obter o produto pelo ID
        $produto = Produto::findOrFail($id);

        // Atualizar os dados do produto
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');

        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('imagens/produtos', 'public');
            $produto->imagem = $imagemPath;
        }

        $produto->save();

        return redirect()->route('adm.index')->with('success', 'Produto atualizado com sucesso.');
    }
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
            'imagem' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        // Salvar o produto no banco de dados
        $produto = new Produto([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'preco' => $request->input('preco'),
        ]);

        // Lidar com o upload da imagem, se fornecida
        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('imagens/produtos', 'public');
            $produto->imagem = $imagemPath;
        }

        $produto->save();

        return redirect()->route('adm.index')->with('success', 'Produto criado com sucesso.');
    }
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);

        $produto->delete();

        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso.');
    }
}

