<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class controlarEstudiantes extends Controller
{
    public function index()
    {
        $estudiantes = Student::all(); // Obtiene todos los estudiantes de la base de datos
    
        return view('obtenerestudiantes',compact('estudiantes'));
    }

    public function create(){
        return view('crearEstudiante');
    }

    public function store(Request $request){
        // guardar datos en la BD
        $estudiante= new Student();
        $estudiante->name=$request->post('nombre');
        $estudiante->email=$request->post('correo_electronico');
        $estudiante->phone=$request->post('numero_telefono');
        $estudiante->language=$request->post('idioma');
        $estudiante->save(); //guarda el registro en la BD

        return redirect()->route('estudiantes.inicio')->with('success','Estudiante agregado con exito');
    }

    public function show($id){
               // Obtener solo 1 registro
        $estudiante=Student::find($id);
        return view('show',compact('estudiante'));
    }

    public function destroy($id){
        $estudiante=Student::find($id);
        $estudiante->delete();
        return redirect()->route('estudiantes.inicio')->with('success','Estudiante eliminado con exito');
    }

    public function edit($id)
    {
       $estudiante=Student::find($id);
        return view('actualizar',compact('estudiante'));
    }

    public function update(Request $request, $id)
    {
        // este metodo actualiza los datos en la BD
        $estudiante=Student::find($id); 
        $estudiante->name=$request->post('nombre');
        $estudiante->email=$request->post('correo_electronico');
        $estudiante->phone=$request->post('numero_telefono');
        $estudiante->language=$request->post('idioma');
        $estudiante->save(); //guarda el registro en la BD

        return redirect()->route('estudiantes.inicio')->with('success','Estudiante actualizado con exito ');
    }
    
}
