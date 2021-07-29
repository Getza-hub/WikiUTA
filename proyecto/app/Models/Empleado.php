<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $primaryKey = 'empleado_id';
    
    public function area (){
        return $this->BelongsTo(Area::class,'area_id');
    }

     //funcion muchos a muchos
     public function users(){
        return $this->belongsToMany(User::class,'empleado_user','empleado_id','user_id');
    }

    
}
