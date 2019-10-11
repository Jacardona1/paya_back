<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosTiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios_tipos')->insert([
            'nombre' => 'Normal ',
            'created_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('servicios_tipos')->insert([
            'nombre' => 'Express ',
            'created_at' => date('Y-m-d H:m:s')
        ]);
    }
}
