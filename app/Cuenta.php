<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
     protected $table="cuentas";

    protected $fillable=['tipocuenta','fechaApertura','idCliente','idSucursal'];

   public function cliente()
    {
    	return $this->belongsTo('App\Cliente');
    }

        public function transaccion()
    {
    	return $this->hasMany('App\Transaccion');
    }

      public function sucursal()
    {
    	return $this->belongsTo('App\Sucursal');
    }
}
