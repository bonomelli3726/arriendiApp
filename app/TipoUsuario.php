<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = "tipo_usuario";
    protected $primaryKey = "idtipo_usuario";
    public $timestamps = false;

    public function usuarios(){
        return $this->hasMany('App\Usuario', 'usuario_idusuario');
    }
}
