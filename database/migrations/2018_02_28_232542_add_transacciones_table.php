<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::dropIfExists('transacciones');
        Schema::create('transacciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->float('monto',8,2);
            $table->float('saldo',8,2);
            $table->datetime('fecha');
            $table->integer('idCliente')->unsigned();
            $table->integer('idCuenta')->unsigned();

            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');
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
        Schema::dropIfExists('transacciones');
    }
}
