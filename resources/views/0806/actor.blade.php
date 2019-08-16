@extends('..\plantilla')

@section('Titulo')
    Listado de Actores
@endsection

@section('Contenido')
    <div class="row bg-secondary mt-3">
        <h1 class="m-auto p-3">Detalle Actor</h1>
    </div>    

    <div class="row bg-warning mb-3" style="min-height:400px;">
        
        @if (isset($actor))

        <ul class="list-group pl-5 pt-5">
            <li class="list-group-item">id Actor: {{$actor->id}}</li>
            <li class="list-group-item">First Name: {{$actor->first_name}}</li>
            <li class="list-group-item">Last Name: {{$actor->last_name}}</li>
            <li class="list-group-item">Rating: {{$actor->rating}}</li>
            <li class="list-group-item">favorite Movie ID: {{$actor->favorite_movie_id}}</li>
            <li class="list-unstyled mt-4 text-center"><a href="/0806/Actores">Volver al Listado</a></li>
        </ul>
        
        
        @else 

        
        <h5 class="pl-5 pt-5">No Existe el Actor</h5>
        <a class="pl-5 pt-5" href="/0806/Actores">Volver al Listado</a>
        @endif

        

    </div> 


    
@endsection