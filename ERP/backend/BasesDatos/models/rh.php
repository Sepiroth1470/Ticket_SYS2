<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rh extends Model
{
    use HasFactory;

    protected $table = 'rhs';

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'telefono',
        'direccion',
        'puesto',
        'salario',
        'fecha_ingreso'
    ];

    // Relación: un RH puede tener varios usuarios
    public function users()
    {
        return $this->hasMany(User::class);
    }
}