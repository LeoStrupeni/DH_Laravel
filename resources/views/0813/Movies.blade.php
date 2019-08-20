@extends('..\plantilla')

@section('Titulo')
    Listado de Peliculas
@endsection

@section('Contenido')

<h3 class="text-center my-3">Peliculas</h3>

<ul class="list-group mb-3">
    @forelse($movies as $movie)
    <li class="list-group-item">
            {{$movie->id}}: {{$movie->title}}
    </li>
    @empty
    <p>No Hay peliculas</p>
    @endforelse
    
</ul>

{{$movies->links()}} 

   
@endsection
