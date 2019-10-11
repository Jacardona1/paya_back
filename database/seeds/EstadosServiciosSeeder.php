<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados_servicios')->insert([
            'nombre' => 'Libre',
            'created_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('estados_servicios')->insert([
            'nombre' => 'Generado ',
            'created_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('estados_servicios')->insert([
            'nombre' => 'Logistica ',
            'created_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('estados_servicios')->insert([
            'nombre' => 'Distribucion ',
            'created_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('estados_servicios')->insert([
            'nombre' => 'Entregado ',
            'created_at' => date('Y-m-d H:m:s')
        ]);
    }
}
