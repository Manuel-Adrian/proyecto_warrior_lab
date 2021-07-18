<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Grupo;

class EstudianteController extends Controller
{
    public function index(){
        $estudiante=Estudiante::all();
        return $estudiante;

       /* $grupo=Grupo::all();
        return $grupo;*/

    }

    public function create(){

    }

    public function store(Request $request){
        $nAgregar= new Estudiante;
        $nAgregar->nombre=$request->nombre;
        $nAgregar->apellidos=$request->apellidos;
        $nAgregar->edad=$request->edad;
        $nAgregar->email=$request->email;
        $nAgregar->save();
        return back()->with('agregar','Campos agregados');

    }
    public function destroy(){

    }
}
