<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Grupo;

class EstudianteController extends Controller
{
    public function index(){
        $datos['estudiantes']=Estudiante::class;
        return view('/carpe/buscar',$datos);
        /*$estudiante=Estudiante::all();
        return $estudiante;*/
       /* $grupo=Grupo::all();
        return $grupo;*/

    }

    public function create(){

    }

    public function store(Request $request){
        $datosEstudiante=request()->except('_token');
        Estudiante::insert($datosEstudiante);
        return response()->json($datosEstudiante);
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
    return redirect('estudiante');
    }
}
