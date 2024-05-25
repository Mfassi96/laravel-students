@extends('plantillas/plantilla')
@section('titulo','Actualizar estudiante')
@section('contenido')
<div class="card">
    <div class="card-header card-title">
      Actualizar estudiante
    </div>
    <div class="card-body">
      <a href="{{route('estudiantes.inicio')}}" class="btn btn-secondary"><i class="fa-solid fa-circle-chevron-left mx-2"></i>Regresar a la vista</a>
      <p class="card-text">
        <form action="{{route('estudiante.update',$estudiante->id)}}" method="POST">
          @csrf
          @method('PUT')
            <label for="nombre" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" value={{$estudiante->name}} required class="form-control">

            <label for="correo_electronico" class="form-label">Correo electronico</label>
            <input id="correo_electronico" name="correo_electronico" value={{$estudiante->email}} type="email" required class="form-control">

            <label for="telefono" class="form-label">Telefono</label>
            <input id="telefono" name="numero_telefono" type="text" value={{$estudiante->phone}} required class="form-control">

            <label for="idioma" class="form-label">Idioma</label>
            <input id="idioma" name="idioma" type="text" value={{$estudiante->language}} required class="form-control">


            <div class=" btn-gruop">
                <button class="btn btn-success">Actualizar <i class="fa-solid fa-marker"></i></button>
            </div>
        </form>
        </p>
    </div>
  </div>
@endsection