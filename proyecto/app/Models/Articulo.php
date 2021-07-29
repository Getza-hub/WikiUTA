<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $primaryKey = 'articulo_id';
    //relacion muchos a muchos
    public function users(){
        return $this->belongsToMany(User::class,'articulo_user','articulo_id','user_id');
    }

    //relacion muchos a uno
    public function user (){
        return $this->BelongsTo(User::class,'user_id');
    }
}
