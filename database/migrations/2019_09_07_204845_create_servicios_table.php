<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('servicio_tipo_id');
            $table->unsignedBigInteger('empaque_tipo_id');
            $table->unsignedBigInteger('user_remitente_id');
            $table->unsignedBigInteger('user_empresa_id')->nullable();
            $table->unsignedBigInteger('user_colaborador_id')->nullable();
            $table->unsignedBigInteger('destinatario_id')->nullable();
            $table->unsignedBigInteger('pago_forma_id');
            $table->unsignedBigInteger('estado_servicio_id');
            $table->dateTime('fecha_hora_admision')->nullable();
            $table->dateTime('fecha_hora_estimada_entrega')->nullable();
            $table->string('dice_contener');
            $table->text('observaciones')->nullable();
            $table->float('valor_comercial');
            $table->float('valor_flete')->nullable();
            $table->float('costo_manejo')->nullable();
            $table->float('valor_descuento')->nullable();
            $table->float('otros_conceptos')->nullable();
            $table->float('total_servicio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
