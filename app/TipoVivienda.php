<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVivienda extends Model
{
    protected $table = 'tipo_vivienda';
    protected $primaryKey = 'idtipo_vivienda';
    public $timestamps = false;

    public function viviendas(){
        return $this->hasMany('App\Vivienda', 'tipo_vivienda_idtipo_vivienda');
    }
}
