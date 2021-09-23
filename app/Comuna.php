<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table = 'comuna';
    protected $primaryKey = 'idcomuna';
    public $timestamps = false;

    public function region(){
        return $this->belongsTo('App\Region', 'region_idregion');
    }
}
