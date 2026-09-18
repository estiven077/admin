<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_center extends Model
{
    use HasFactory;

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'name',
        'location',
    ];

    // Relación: Un Centro de Formación tiene muchos instructores
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
