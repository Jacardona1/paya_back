<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'julian',
            'email' => 'julicarto@hotmail.com',
            'password' => bcrypt('123456789'),
            'created_at' => date('Y-m-d H:m:s'),
            'nombres' => 'Julian',
            'apellidos' => 'Cardona Torres',
            'numero_documento' => '1035877094',
            'telefono' => '2890153',
            'estado' => 1,
            'user_tipo_id' => 4,
            'documento_tipo_id' => 1
        ]);
    }
}
