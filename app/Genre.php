<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // public $table='genres';
    // public $primarykey='id';
    // public $timestamps=false;
    public $guarded=[];
    
    public function movies(){
        return $this->hasMany(Movie::class,'Movie_id');
    }
}
