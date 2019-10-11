<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DocumentosTiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documentos_tipos')->insert([
            'nombre' => 'CC',
            'created_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('documentos_tipos')->insert([
            'nombre' => 'TI',
            'created_at' => date('Y-m-d H:m:s')
        ]);
    }
}
