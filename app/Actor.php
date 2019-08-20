<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    // public $table='actors';
    // public $primarykey='id';
    // public $timestamps=false;
    public $guarded=[];

    public function getNombreCompleto(){
        return $this->first_name . " " . $this->last_name;
    }

    public function movies(){
        return $this->belongsToMany(Movie::class,'actor_movie','actor_id','movie_id');
    }

    public function favoriteMovie(){
        return $this->belongsTo(Movie::class,'favorite_movie_id');
    }
    
}
