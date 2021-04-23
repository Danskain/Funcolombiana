<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoDocumento;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = ['id','idpaciente', 'ciudad', 'eps', 'ips'];

    public $timestamps = false;

    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }

}
