<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{   
    use HasFactory;
    protected $fillable = ['codigo','nombre','apellido','tipoDocumento','numeroDocumento','telefono','celular','direccion',];

    public function cliente()
    {
        return $this->hasOne('App\cliente');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    } 

}
