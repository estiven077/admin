<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'age',
        'phone',
        'profession',
        'photo',
        'biography',
        'area_id',
        'training_center_id',
    ];
 
    // DEFINIR LA RELACIÓN AQUÍ CON EL MISMO NOMBRE QUE USAS EN EL CONTROLADOR
    public function training_center()
    {
        return $this->belongsTo(Training_center::class, 'training_center_id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
}
