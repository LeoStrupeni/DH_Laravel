<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class actorController extends Controller
{
    public function listado(){

        $actores = Actor::paginate(5);

        $vac = compact("actores");

        return view('/0806/Actores',$vac);

    }

    public function show($id){
        
        $actor = Actor::find($id);
       
        $vac = compact("actor");

        return view('/0806/Actor',$vac);
    }

    public function search(){

        $actores = Actor::WHERE('first_name','LIKE','%'.$_GET['actor'].'%')
                            ->orderby('last_name')
                            ->paginate(10);
       
        $vac = compact("actores");

        return view('/0806/Actores',$vac);
    }

}
