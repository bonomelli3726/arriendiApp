<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $table = 'propiedad';
    protected $primaryKey = 'idpropiedad';
    public $timestamps = false;

    public function usuario(){
        return $this->belongsTo('App\Usuario','usuario_idusuario');
    }

    public function vivienda(){
        return $this->belongsTo('App\Vivienda','vivienda_idvivienda');
    }

}
