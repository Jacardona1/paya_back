<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTipoTableSeeder::class);
        $this->call(DocumentosTiposSeeder::class);
        $this->call(EmpaquesTiposSeeder::class);
        $this->call(EstadosServiciosSeeder::class);
        $this->call(PagosFormasSeeder::class);
        $this->call(ServiciosTiposSeeder::class);
        $this->call(UserSeeder::class);



    }
}
