<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'description',
        'razonsocial',
        'descripcion',
        'urlfoto',
        'urllogo',
        'visitas',
        'orden',
        'estado',
        'publicacion',
        'ruta_id',
        'user_id',

    ];
    public function Ruta()
    {

        return $this->belongTo("App\Models\Ruta");
    }
    public function User()
    {

        return $this->belongTo("App\Models\User");
    }
}
