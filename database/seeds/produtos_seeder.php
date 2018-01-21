<?php

use Illuminate\Database\Seeder;

class produtos_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Produto::class, 5)->create();
    }
}
