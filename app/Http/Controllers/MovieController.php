<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{

    public function listado(){
        $movies = Movie::paginate(10);
        $vac = compact("movies");
        return view('/0813/Movies',$vac);
    }
    
    public function store(Request $req){
        $this->validate($req,[
            'title'=>'required',
            'rating'=>'required',
            'awards'=>'required',
            'release_date'=>'required',
            'length'=>'required',
            'genre'=>'required',
            ],
            [
                'required'=> 'El campo :attribute es Obligatorio',
            ]);

        $movieNueva = NEW Movie();
        $movieNueva->title=$req['title'];
        $movieNueva->rating=$req['rating'];
        $movieNueva->awards=$req['awards'];
        $movieNueva->release_date=$req['release_date'];
        $movieNueva->length=$req['length'];
        $movieNueva->genre_id=$req['genre'];

        $movieNueva->save();

        return redirect("/0813/Movies");
    }
}

