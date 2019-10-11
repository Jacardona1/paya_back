<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpaquesTiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empaques_tipos')->insert([
            'nombre' => 'Pequeño',
            'created_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('empaques_tipos')->insert([
            'nombre' => 'Grande',
            'created_at' => date('Y-m-d H:m:s')
        ]);
    }
}
