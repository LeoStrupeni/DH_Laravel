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
            <form action="/0813/add" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="first_name">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="last_name">
                </div>
                <div class="form-group">
                    <label>Rating</label>
                    <input type="text" class="form-control" name="rating" min=0 max=10>
                </div>
                <div class="form-group">
                    <label>Favorite Movie</label>
                    <input type="number" class="form-control" name="favorite_movie_id">
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="file">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    
       

    </div> 


    
@endsection