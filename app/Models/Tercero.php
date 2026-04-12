<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
    protected $fillable = [
    'tipo_documento',
    'documento',
    'digito_verificacion',
    'primer_nombre',
    'segundo_nombre',
    'primer_apellido',
    'segundo_apellido',
    'direccion',
    'telefono_uno',
    'telefono_dos',
    'email',
    'departamento',
    'ciudad',
    'activo',
    ];
}