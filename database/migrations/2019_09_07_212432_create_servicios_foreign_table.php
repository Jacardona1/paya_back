<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosForeignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servicios', function($table){
//            $table->foreign('servicio_tipo_id')->references('id')->on('servicios_tipos');
            $table->foreign('empaque_tipo_id')->references('id')->on('empaques_tipos');
            $table->foreign('user_remitente_id')->references('id')->on('users');
            $table->foreign('user_empresa_id')->references('id')->on('users');
            $table->foreign('user_colaborador_id')->references('id')->on('users');
            $table->foreign('pago_forma_id')->references('id')->on('pagos_formas');
            $table->foreign('estado_servicio_id')->references('id')->on('estados_servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios_foreign');
    }
}
