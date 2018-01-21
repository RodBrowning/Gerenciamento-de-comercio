<?php

use Illuminate\Database\Seeder;

class fornecedor_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Fornecedor\Fornecedor::class, 13)->create();
    }
}
