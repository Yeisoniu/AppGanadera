<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finca extends Model
{
    use HasFactory;
    public $table ="fincas";
    protected $fillable= array("*"); //indica los cambios de la tabla

    public function propietarios(){ 
    return $this->belongsToMany(Propietario::class, "finca_propietario");
}
}
