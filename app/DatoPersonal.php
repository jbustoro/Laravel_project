<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoPersonal extends Model
{
    //
    protected $table = "datosPersonales";
    protected $fillable = ["nombre", "edad"];
}
