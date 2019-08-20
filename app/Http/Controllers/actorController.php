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
        $actores = Actor::WHERE('first_name','LIKE','%'.$_POST['actor'].'%')
                            ->orderby('last_name')
                            ->paginate(10);
        $vac = compact("actores");
        return view('/0806/Actores',$vac);
    }

    public function store(Request $req){
        $this->validate($req,[
            'first_name'=>'required',
            'last_name'=>'required',
            'rating'=>'required',
            'favorite_movie_id'=>'required',
            'foto'=>'file',
            ],
            [
                'required'=> 'El campo :attribute es Obligatorio',
            ]);

        $actorNuevo = NEW Actor();
        $ruta=$req->file('foto')->store('public');
        $nombreArchivo=basename($ruta);

        $actorNuevo->foto=$nombreArchivo;
        $actorNuevo->first_name=$req['first_name'];
        $actorNuevo->last_name=$req['last_name'];
        $actorNuevo->rating=$req['rating'];
        $actorNuevo->favorite_movie_id=$req['favorite_movie_id'];
        $actorNuevo->save();
        return redirect("/0806/Actores");
    }

    public function edit($id){
        $actor = Actor::find($id);
        $vac = compact("actor");
        return view("/0813/edit",$vac);
    }

    public function update(Request $req){
        $actorNuevo = Actor::find($req['id']);
        $actorNuevo->first_name=$req['first_name'];
        $actorNuevo->last_name=$req['last_name'];
        $actorNuevo->rating=$req['rating'];
        $actorNuevo->favorite_movie_id=$req['favorite_movie_id'];
        
        $ruta=$req->file('foto')->store('public');
        $nombreArchivo=basename($ruta);
        $actorNuevo->foto=$nombreArchivo;
        
        $actorNuevo->save();
        return redirect("/0806/Actores");
    }


    public function destroy(Request $req){
        $id=$req['id'];
        $actor = Actor::find($id);
        $actor->delete();
        return redirect("/0806/Actores");
    }


}
