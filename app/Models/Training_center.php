<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_center extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'area_id',
        'training_center_id',
    ];

    public function area()
    {
        return $this->belongsTo('App\Models\Area', 'area_id');
    }

    public function trainingCenter()
    {
        return $this->belongsTo('App\Models\Training_center', 'training_center_id');
    }
}
