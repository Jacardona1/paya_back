<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagosFormasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pagos_formas')->insert([
            'nombre' => 'Contra entrega ',
            'created_at' => date('Y-m-d H:m:s')
        ]);
    }
}
