<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;


class TipoDocumento extends Model
{
    use HasFactory;
    protected $table = "tipo_documentos";

}
