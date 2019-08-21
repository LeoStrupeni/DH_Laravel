@extends('..\plantilla')

@section('Titulo')
    Perfil
@endsection

@section('Contenido')
      <?php $datosUsuario = Auth::user();?>

    <div class="row my-3" style="min-height: 400px;">
        <div class="col-6 m-auto">
            <div class="card bg-danger" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-5 p-4">
                    <img src="\storage\{{$datosUsuario->avatar}}" class="card-img h-100 w-100">
                    </div>
                    <div class="col-md-7">
                    <ul class="list-group">
                        <li class="list-group-item">Id: {{$datosUsuario->id}}</li>
                        <li class="list-group-item">Name: {{$datosUsuario->name}}</li>
                        <li class="list-group-item">Surname: {{$datosUsuario->surname}}</li>
                        <li class="list-group-item">Email: {{$datosUsuario->email}}</li>
                        <li class="list-group-item">Created_at: {{$datosUsuario->created_at}}</li>
                    </ul>
                    </div>
                </div>
            </div>  
        </div>    
    </div>
      

@endsection