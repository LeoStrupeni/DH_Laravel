@extends('..\plantilla')

@section('Titulo')
    Editar Actor
@endsection

@section('Contenido')
    <div class="row bg-secondary mt-3">
        <h1 class="m-auto p-3">Editar Actor</h1>
    </div>    

    <div class="row bg-warning mb-3" style="min-height:400px;">
        <div class="col-6 m-auto">

            @if (isset($actor))

                <form action="" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Id actor</label>
                        <input type="text" class="form-control" name="first_name" value="{{$actor->id}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{$actor->first_name}}">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="{{$actor->last_name}}">
                    </div>
                    <div class="form-group">
                        <label>Rating</label>
                        <input type="text" class="form-control" name="rating" min=0 max=10 value="{{$actor->rating}}">
                    </div>
                    <div class="form-group">
                        <label>Favorite Movie</label>
                        <input type="number" class="form-control" name="favorite_movie_id" value="{{$actor->favorite_movie_id}}">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <img src="\storage\{{$actor->foto}}" class="rounded mx-auto d-block mb-1" alt="Responsive image">
                        <input type="file" class="form-control" name="foto" values="\storage\{{$actor->foto}}">
                    </div>
                    <div class="text-center">
                        <a class="btn btn-info" href="/0806/Actores" role="button">Listado</a>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                
                </form>
                
            @else
                <h5 class="pl-5 pt-5">No Existe el Actor</h5>
                <a class="btn btn-info" href="/0806/Actores" role="button">Listado</a>
            @endif


        </div>
    
       

    </div> 


    
@endsection