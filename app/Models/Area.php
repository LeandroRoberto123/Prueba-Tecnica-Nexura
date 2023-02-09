<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table = 'areas';

    // Relacion Many To One / de muchos a uno
    public function employee()
    {
        return $this->hasMany('App\Models\Employee');
    }
}
