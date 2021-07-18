<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('prueba');

    }
    public function prue(){
        return view('welcome');
    }

    public function show($id){
        return "Mostrando deatlle del usuario: {$id}";
    }
}
