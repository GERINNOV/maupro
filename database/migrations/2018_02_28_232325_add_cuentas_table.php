<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('cuentas');
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipocuenta');
            $table->dateTime('fechaApertura');
            $table->float('saldo',8,2);
            $table->integer('idSucursal')->unsigned();

            $table->foreign('idSucursal')->references('id')->on('sucursales')->onDelete('cascade');
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
        Schema::dropIfExists('cuentas');
    }
}
