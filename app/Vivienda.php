<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    protected $table = 'vivienda';
    protected $primaryKey = 'idvivienda';
    public $timestamps = false;

    public function tipoVivienda(){
        return $this->hasMany('App\Arriendo', 'tipo_vivienda_idtipo_vivienda');
    }

    public function comuna(){
        return $this->belongsTo('App\Comuna', 'comuna_idcomuna');
    }

    public function arriendos(){
        return $this->hasMany('App\Arriendo','vivienda_idvivienda');
    }

    public function propiedades(){
        return $this->hasMany('App\Propiedad','vivienda_idvivienda');
    }

}
