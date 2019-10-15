<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->integer('numero_documento')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->boolean('estado')->default(0);
            $table->unsignedBigInteger('user_tipo_id')->nullable();
            $table->unsignedBigInteger('documento_tipo_id')->nullable();
            $table->unsignedBigInteger('user_empresa_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
