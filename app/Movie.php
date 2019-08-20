<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // public $table='movies';
    // public $primarykey='id';
    // public $timestamps=false;
    public $guarded=[];
    
    public function genre(){
        return $this->belongsTo(Genre::class,'genre_id');
    }

    public function actors(){
        return $this->belongsToMany(Movie::class,'actor_movie','movie_id','actor_id');
    }


}
