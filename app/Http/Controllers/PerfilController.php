<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class PerfilController extends Controller
{
    public function search(){
        $usuarioLog = Auth::user();
        if($usuarioLog == null){
            return redirect("/login");
        }
        return view('/0815/perfil',compact(Auth::user()));
    }
}
