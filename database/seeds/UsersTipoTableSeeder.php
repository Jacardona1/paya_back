<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_tipos')->insert([
            'nombre' => 'Clientes',
            'created_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('users_tipos')->insert([
            'nombre' => 'Empresa',
            'created_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('users_tipos')->insert([
            'nombre' => 'Colaborador',
            'created_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('users_tipos')->insert([
            'nombre' => 'Administrador',
            'created_at' => date('Y-m-d H:m:s')
        ]);
    }
}
