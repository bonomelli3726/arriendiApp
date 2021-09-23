<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    protected $table = 'vivienda';
    protected $primaryKey = 'idvivienda';
    public $timestamps = false;
}
