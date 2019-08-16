@extends('..\plantilla')

@section('Titulo')
    Detalle Pelicula
@endsection

@section('Contenido')

    <div class="row bg-secondary mt-3">
        <h1 class="m-auto p-3">Detalle</h1>
    </div>    

    <div class="row bg-warning mb-3" style="min-height:400px;">
        <div class="m-auto">
        
        <?php $mensaje=null;?>

            @forelse ($peliculas as $pelicula)
                @if ($pelicula[0]==$id)
                    <?php $mensaje="La pelicula es: ".$pelicula[1].". Tiene un Rating de: ".$pelicula[2];?>
                @else 
                    <?php is_null($mensaje) ? $mensaje='Pelicula no encontrada': $mensaje?>
                @endif
            
            @empty
                <?php is_null($mensaje) ? $mensaje='No hay Peliculas': $mensaje?>
            @endforelse

        <h5>{{$mensaje}}</h5>
            
        </div>
    </div>    
    
@endsection