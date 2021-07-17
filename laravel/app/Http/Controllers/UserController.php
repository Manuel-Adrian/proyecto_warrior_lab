<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function prue(){
        return view('prueba');
    }

    public function show($id){
        return "Mostrando deatlle del usuario: {$id}";
    }
}
