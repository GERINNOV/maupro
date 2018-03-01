<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    protected $table="transacciones";

    protected $fillable=['tipo','monto','saldo','fecha','idCliente','idCuenta'];



    public function cliente()
    {
    	return $this->belongsTo('App\Cliente');
    }

      public function cuenta()
    {
    	return $this->belongsTo('App\Cuenta');
    }

      public function sucursal()
    {
    	return $this->belongsTo('App\Sucursal');
    }
}
