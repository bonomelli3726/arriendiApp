<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arriendo extends Model
{
    protected $table = 'arriendo';
    protected $primaryKey = 'idarriendo';
    public $timestamps = false;

    public function usuario(){
        return $this->belongsTo('App\Usuario','usuario_idusuario');
    }

    public function vivienda(){
        return $this->belongsTo('App\Vivienda','vivienda_idvivienda');
    }

}
