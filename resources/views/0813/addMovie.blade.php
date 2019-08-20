<?php use App\Genre; ?>
@extends('..\plantilla')

@section('Titulo')
    Agregar Actor
@endsection

@section('Contenido')
    <div class="row bg-secondary mt-3">
        <h1 class="m-auto p-3">Agregar Actor</h1>
    </div>    

    <div class="row bg-warning mb-3" style="min-height:400px;">
        <div class="col-6 m-auto">
            <form action="" method="post">
                @method('PUT')
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label>Rating</label>
                    <input type="number" class="form-control" name="rating" min=0 max=10>
                </div>
                <div class="form-group">
                    <label>Awars</label>
                    <input type="number" class="form-control" name="awards">
                </div>
                <div class="form-group">
                    <label>Release date</label>
                    <input type="date" class="form-control" name="release_date">
                </div>
                <div class="form-group">
                    <label>length</label>
                    <input type="number" class="form-control" name="length">
                </div>
                <div class="form-group">
                    <?php $generos=Genre::all();?>
                        <label>Genero</label>
                        <select type="number" class="form-control" name="genre">
                            @foreach ($generos as $genre)
                                <option value="{{$genre['id']}}">{{$genre['id']}}: {{$genre['name']}}</option>  
                            @endforeach
                        </select>
                    </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    
       

    </div> 


    
@endsection