@extends('..\plantilla')

@section('Titulo')
    Listado de Actores
@endsection

@section('Contenido')


<div class="col-6 m-auto">
  <form action="/0806/Actores/Buscar" class="form row p-2" method="get">
    <div class="form-group mr-1">
      <input type="text" class="form-control" Name="actor" placeholder="A quien buscas">
    </div>
    <div class="form-group mr-1">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
    <div class="form-group">
      <button type="reset" class="btn btn-primary">Limpiar</button>
    </div>
  </form>
</div>

<h3 class="text-center my-3">Actores</h3>

<ul class="list-group mb-3">
    @forelse($actores as $actor)
    <li class="list-group-item">
        <a href="/0806/Actor/{{$actor->id}}">
            {{$actor->getNombreCompleto()}}
        </a>
    </li>
    @empty
    <p>No Hay Actores</p>
    @endforelse
    
</ul>

{{$actores->links()}} 

   
@endsection
