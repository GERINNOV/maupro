<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table="clientes";

    protected $fillable=['nombre','apPaterno','apMaterno','sexo','calle','numExt','numInt','colonia','cp','municipio','estado','telefono','celular'];

     public function cuenta()
    {
    	return $this->hasMany('App\Cuenta');
    }

       public function transaccion()
    {
    	return $this->hasMany('App\Transaccion');
    }
}
