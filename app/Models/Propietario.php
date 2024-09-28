<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;
    public $table ="Propietarios";
    protected $filliable = array("*");

    public function fincas(){  
    return $this->belongsToMany(Finca::class,"finca_propietario");
    }
}
