@extends('..\plantilla')

@section('Titulo')
    Listado de Peliculas
@endsection

@section('Contenido')

<h1 class="text-center mt-3 p-3">Listado de Peliculas</h1>
    <div class="row my-3">
 
        @if(empty($peliculas))
            <div class="col-10">
                <div class="alert alert-primary" role="alert">
                    No hay películas
                </div>    
            </div>
        @else 
            <div class="col-4 ml-5">    

                <ul class="list-group">
                    <li class="list-group-item h6 text-center">Pelicula</li>
                    @foreach($peliculas as $peli)   
                    <li class="list-group-item">{{$peli[1]}}
                        @if( $peli[1] >= 8 )
                            <a href="" class="text-primary">(Recomendada)</a>
                        @endif
                    </li>
                    @endforeach
                </ul> 
            </div>
            <div class="col-1">    
                <ul class="list-group">
                    <li class="list-group-item h6">Rating</li>
                    @foreach($peliculas as $peli)   
                    <li class="list-group-item text-center">{{$peli[0]}}</li>
                    @endforeach
                </ul> 
            </div>

        @endif           
        
    </div>
    
@endsection
