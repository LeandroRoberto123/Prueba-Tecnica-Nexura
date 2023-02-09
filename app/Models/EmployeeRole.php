<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeRole extends Model
{
    use HasFactory;
    protected $table = 'empleado_rol';
    public $timestamps = false;

    // Relacion Many To One / de muchos a uno
    public function employee()
    {
        return $this->belongsTo('App\Models\Employee', 'empleado_id');
    }
    
    // Relacion Many To One / de muchos a uno
    public function rol()
    {
        return $this->belongsTo('App\Models\Rol', 'rol_id');
    }
}
