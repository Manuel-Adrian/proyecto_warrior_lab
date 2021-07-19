<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Grupo;

class EstudianteController extends Controller
{
    public function index(){
        $datos['estudiantes']=Estudiante::paginate(6);
        return view('carpe.consulta',$datos);
        /*$estudiante=Estudiante::all();
        return $estudiante;*/
       /* $grupo=Grupo::all();
        return $grupo;*/

    }

    public function create(){

    }
    public function edit($id){
        $estudiante=Estudiante::findOrFail($id);
        return view('carpe.edit',compact('estudiante'));

    }

    public function update(Request $request, $id){
        $datosEstudiante=request()->except('_token','_method');
        Estudiante::where('id','=',$id)->first()
        ->update($datosEstudiante);

        $datosestudiante=Estudiante::findOrFail($id);
        return view('carpe.edit',compact('estudiante'));
    }
        // public function update(Request $request, $id){
        // $estudiante=Estudiante::findOrFail($id);
        //     //$estudiante=Estudiante::findOrFail($id);
        // // $estudiante=request()->nombre;
        // // $estudiante=request()->apellidos;
        // // $estudiante=request()->edad;
        // // $estudiante=request()->email;

        // // return view('carpe.consulta');
        // // return response()->json($estudiante);
        // $estudiante->nombre=$request->nombre;
        // $estudiante->apellidos=$request->apellidos;
        // $estudiante->edad=$request->edad;
        // $estudiante->email=$request->email;
        // $estudiante->save();
        // return back();
        //  }

    public function store(Request $request){
        $datosEstudiante=request()->except('_token');
        Estudiante::insert($datosEstudiante);
        return back();
        //return response()->json($datosEstudiante).back();

        // $nAgregar= new Estudiante;
        // $nAgregar->nombre=$request->nombre;
        // $nAgregar->apellidos=$request->apellidos;
        // $nAgregar->edad=$request->edad;
        // $nAgregar->email=$request->email;
        // $nAgregar->save();
        // return back()->with('agregar','Campos agregados');

    }
    public function destroy($id){
    Estudiante::destroy($id);
    return back();
    //return redirect('carpe');
    }
}
