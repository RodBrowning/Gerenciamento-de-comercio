<?php

use Illuminate\Database\Seeder;

class categorias_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Produtos\Categoria::class, 5)->create();
    }
}
