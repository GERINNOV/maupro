<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
     protected $table="sucursales";

    protected $fillable=['nombre'];

        public function transaccion()
    {
    	return $this->hasMany('App\Transaccion');
    }
}
