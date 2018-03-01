<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('clientes');
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apPaterno');
            $table->string('apMaterno');
            $table->string('sexo');
            $table->string('calle');
            $table->integer('numExt');
            $table->integer('numInt');
            $table->string('colonia');
            $table->integer('cp');
            $table->string('municipio');
            $table->string('estado');
            $table->integer('telefono');
            $table->integer('celular');
            $table->integer('idCuenta')->unsigned();

            $table->foreign('idCuenta')->references('id')->on('cuentas')->onDelete('cascade');
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
        Schema::dropIfExists('clientes');
    }
}
