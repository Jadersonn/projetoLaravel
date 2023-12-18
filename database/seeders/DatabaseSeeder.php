<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Chamada para o seeder de produtos
        $this->call(ProdutosTableSeeder::class);
    }
}
