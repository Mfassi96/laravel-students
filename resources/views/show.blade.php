@extends('plantillas/plantilla')
@section('titulo','Eliminar estudiante')
@section('contenido')
    <div class="container-fluid">
        <div class="row">
                <div class="col">
                    <div class="card">
                    <div class="card-body">
                       
                        <p class="card-text">
                            <div class="alert alert-danger" role="alert">
                                <h4 class="card-title text-center display-2">¿Esta seguro de eliminar este usuario?</h4>
                                <p class="text-center bg-danger">Esta accion no se puede deshacer</p>
                                <hr>
                                <div class="info text-center">
                                    <h6 class="display-6">Nombre: {{$estudiante->name}}</h6>
                                    <h6 class="display-6">Correo Electronico: {{$estudiante->email}}</h6>
                                    <h6 class="display-6">Telefono: {{$estudiante->phone}}</h6>
                                    <h6 class="display-6">Idioma: {{$estudiante->language}}</h6>
                                </div>
                            </div>
                        </p>

                                <div class="col d-flex justify-content-between">
                                 
                                        <a href="{{route('estudiantes.inicio')}}" class="btn btn-secondary">Regresar <i class="fa-solid fa-circle-chevron-left"></i></a>
                                        <form action="{{route('estudiante.destroy',$estudiante->id)}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger btn-block btn-lg">ELIMINAR<i class="fa-solid fa-trash-can mx-2" style="color: #2d4267;"></i></button>
                                          </form>
                                </div>
                            
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
@endsection
