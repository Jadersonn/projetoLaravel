<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('produtos')->truncate();
        DB::table('produtos')->insert([
            [
                'nome' => 'Carro Modelo A',
                'descricao' => 'Um carro excelente para suas necessidades.',
                'preco' => 50000.00,
                'imagem' => 'caminho/para/imagem1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Carro Modelo B',
                'descricao' => 'Um carro elegante e eficiente.',
                'preco' => 60000.00,
                'imagem' => 'caminho/para/imagem2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Carro Modelo C',
                'descricao' => 'Descrição do Carro Modelo C.',
                'preco' => 55000.00,
                'imagem' => 'caminho/para/imagem3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Carro Modelo D',
                'descricao' => 'Descrição do Carro Modelo D.',
                'preco' => 58000.00,
                'imagem' => 'caminho/para/imagem4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
