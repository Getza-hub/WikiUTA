<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $primaryKey = 'area_id';

    public function empleados(){
        return $this->hasMany(Empleado::class,'area_id');
    }
}

