<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/info', function () {
//     return (string)phpinfo();
// });


Route::get('/', function () {
    return view('welcome');
});

// Ejercitacion del dia 01082019

Route::get('/miPrimeraRuta', function () {
    return "Creé mi primer ruta en Laravel";
});

Route::get('/esPar/{numero}', function ($numero) {
    return $numero%2==0 ? "El numero $numero es par" : "El numero $numero es impar";  

    // if ($numero%2==0) {
    //     return "El numero $numero es par";
    // } else {
    //     return "El numero $numero es impar";  
    // };
});

Route::get('/sumar/{num1}/{num2}/{num3?}', function ($num1,$num2,$num3="0") {
    $suma=$num1+$num2+$num3;
    return "La suma de ambos numeros da $suma";
});

Route::get('/0801/peliculas/{id?}', function ($id=null) {
    //$peliculas = [];    
    $peliculas = [
        ["1","Six Underground","5"],
        ["2","La balada de Buster Scruggs","8"],
        ["3","Al otro lado del viento","8"],
        ["4","Al otro lado del viento","9"],
        ["5","Emboscada final","7"]
    ];

    if(is_null($id)){
        $vac = compact("peliculas");
        return view('/0801/peliculas',$vac);
    } else {
        $vac=compact('peliculas','id');
        return view('/0801/detallePelicula',$vac);
    }
    
});

// Ejercitacion del dia 06082019

Route::get('/0806/Actores', 'actorController@listado');

Route::get('/0806/Actor/{id}', 'actorController@show');

Route::get('/0806/Actores/Buscar', 'actorController@search');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
