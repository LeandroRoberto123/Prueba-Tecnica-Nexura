<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'empleados';

    // Relacion Many To One / de muchos a uno
    public function areas()
    {
        return $this->belongsTo('App\Models\Area', 'area_id');
    }
}
