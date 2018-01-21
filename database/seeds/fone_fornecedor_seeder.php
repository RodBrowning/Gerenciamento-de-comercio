<?php

use Illuminate\Database\Seeder;

class fone_fornecedor_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Fornecedor\Telefone::class, 14)->create();
    }
}
