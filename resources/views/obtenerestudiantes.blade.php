@extends('plantillas/plantilla')
@section('titulo','Listado de estudiantes')

@section('contenido')
<div class="container-fluid">
<h1 class="display-1 text-center">Listado de estudiantes<i class="fa-solid fa-graduation-cap"></i></h1>

<table  class="table table-striped">
  <thead>
      <tr>
          <th>Nombre</th>
          <th>Email</th>
          <th>Telefono</th>
          <th>Idioma</th>
          <th>Creado</th>
          <th>Acciones</th>
      </tr>
  </thead>

  <tbody>
      @foreach($estudiantes as $estudiante)
      <tr>
          <td>
              {{$estudiante->name}}  
          </td> 
          <td>
              {{$estudiante->email}}  
          </td> 
          <td>
              {{$estudiante->phone}}  
          </td> 
          <td>
              {{$estudiante->language}}  
          </td> 
          <td> 
            {{$estudiante->created_at?? 'fecha no disponible'}} 
          </td> 
          <td>
          
              <a href="{{route('estudiante.edit',$estudiante->id)}}" class="btn btn-info"><i class="fa-solid fa-pencil"></i></a>
            
              <a href="{{ route('estudiante.alerta', $estudiante->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>

          </td>
      </tr>
      @endforeach
    </div>
      @endsection

  </tbody>
</div>
