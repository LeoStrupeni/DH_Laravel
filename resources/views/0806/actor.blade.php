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
            <div class="col-4 mr-0">
                <ul class="list-group pl-5 pt-5">
                    <li class="list-group-item">Id Actor: {{$actor->id}}</li>
                    <li class="list-group-item">First Name: {{$actor->first_name}}</li>
                    <li class="list-group-item">Last Name: {{$actor->last_name}}</li>
                    <li class="list-group-item">Rating: {{$actor->rating}}</li>
                    <li class="list-group-item">Favorite Movie: {{$actor->favoriteMovie->title}}</li>
                </ul>
            </div>
            
            <div class="col-4 mt-5">
            
                <img class="rounded mx-auto d-block" alt="Responsive image" src="\storage\{{$actor->foto}}">
            </div>

            <div class="btn-group-vertical col-2">
                <a class="btn btn-primary mb-1" href="/0806/Actores" role="button">Listado</a>
                <a class="btn btn-success mb-1" href="/0813/{{$actor->id}}/edit" role="button">Editar</a>
                
                <form action="/0813/delete" method="POST" class="w-100">
                    @method('delete')
                    {{ csrf_field() }}
                    <input type="hidden" name=id value="{{$actor->id}}"> 
                    <button type="submit" class="btn btn-danger" role="button">Eliminar</button>
                </form>

            </div>
           
        @else 

        <div class="col-4 m-auto">
                <h5 class="pl-5 pt-5">No Existe el Actor</h5>
                <a class="pl-5 pt-5" href="/0806/Actores">Volver al Listado</a>
                
        </div>            
        @endif   
    </div> 

    
@endsection