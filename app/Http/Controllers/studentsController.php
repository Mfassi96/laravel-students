<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;


class studentsController extends Controller
{
    public function index(){
        //return "Obteniendo lista de estudiantes desde el controlador";
        
        $students= Student::all();
        if($students->isEmpty()){
            return response()->json(['mensaje'=>'No hay ningun estudiante'], 404);
        }
        return response()->json($students,200);
        
    }

    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'language'=>'required',
        ]);

        if($validator->fails()){
            $data=[
                'message'=>'Error en la validacion de datos',
                'errors'=>$validator->errors(),
                'status'=>400
            ];
            return response()->json($data, 400);
        }

        $student=Student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'language'=>$request->language
        ]);

        if(!$student){
            $data=[
                'message'=>'Error al crear estudiante',
                'status'=>500
            ];
            return response()->json($data,500);
        }

        $data=[
            'student'=>$student,
            'status'=>201
        ];
        return response()->json($data,201);
    }

    public function show($id){
        $student=Student::find($id);
        if(!$student){
            $data=[
                "message"=>"Estudiante no encontrado",
                "satatus"=>400
            ];
            return response()->json($data,400);
        }else{
            $data=[
                "message"=>$student,
                "satatus"=>200
            ];
            return response()->json($data,200);
        }
    }

    public function destroy($id){
        $student=Student::find($id);
        if(!$student){
            $data=[
                "message"=>"Estudiante no encontrado",
                "satatus"=>400
            ];
            return response()->json($data,400);
        }else{
            $student->delete();
            $data=[
                "message"=>"El estudiante ha sido eliminado",
                "satatus"=>200
            ];
            return response()->json($data,400);
        }

    }

    public function update(Request $request,$id){
        $student=Student::find($id);
        if(!$student){
            $data=[
                "message"=>"Estudiante no encontrado",
                "satatus"=>400
            ];
            return response()->json($data,400);
        }else{
            $validator=Validator::make($request->all(),[
                'name'=>'required',
                'email'=>'required|email',
                'phone'=>'required',
                'language'=>'required',
            ]);
            if($validator->fails()){
                $data=[
                    'message'=>'Error en la validacion de datos',
                    'errors'=>$validator->errors(),
                    'status'=>400
                ];
                return response()->json($data, 400);
            }
            //Actualizar el registro
            $student->name=$request->name;
            $student->email=$request->email;
            $student->phone=$request->phone;
            $student->language=$request->language;
            $student->save();
            $data=[
                "message"=>$student,
                "satatus"=>200
            ];
            return response()->json($data,200);
        }

    }

    public function updatepartial(Request $request, $id){
        $student=Student::find($id);
        if(!$student){
            $data=[
                "message"=>"Estudiante no encontrado",
                "status"=>400
            ];
            return response()->json($data,400);
        }
    
        $validator=Validator::make($request->all(),[
            'email'=>'email|unique:students',
        ]);
    
        if($request->has('name')){
            $student->name=$request->name;
        }
        if ($request->has('email')) {
            $student->email=$request->email;
        }
        if($request->has('phone')){
            $student->phone=$request->phone;
        }
        if($request->has('language')){
            $student->language=$request->language;
        }
    
        $student->save();
    
        return response()->json($student,200);
    }
    

}
