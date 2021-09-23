<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //table
    protected $table = 'region';
    //key
    protected $primaryKey = 'idregion';
    //ts = false
    public $timestamps = false;

    public function comunas(){
        return $this->hasMany('App\Comuna', 'region_idregion');
    }


}
