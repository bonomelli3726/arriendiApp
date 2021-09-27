<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'idusuario';
    public $timestamps = false;

    public function tipoUsuario(){
        return $this->belongsTo('App\Usuario', 'tipo_usuario_idtipo_usuario');
    }

    public function arriendos(){
        return $this->hasMany('App\Arriendo', 'usuario_idusuario');
    }

    public function propiedades(){
        return $this->hasMany('App\Propiedad','usuario_idusuario');
    }
}
