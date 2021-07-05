<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EsstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INSERTAR
    // DB::insert('INSERT INTO Estudiante (nombre,apellidos,edad,email) 
    // VALUES("Alejandro","Fuentes Leyva","23","ale@correo.com")');    
    
    //DB::table('Estudiante')->insert([
    //        'nombre' => 'Sergio', 'apellidos' => 'Perez',
    //        'edad' => '30', 'email' => 'asergio@hotmailcom'
    //    ]); 

    
    //BUSCAR
    // $student=DB::table('Estudiante')->where('nombre','Adrian')->first();
    // dd($student);
    //$student=DB::table('Estudiante')->pluck('id');
    //dd($student);
    // $student=DB::table('Estudiante')->select('*')->get();
    // dd($student);

    
    // //ACTUALIZAR
    // $student=DB::table('Estudiante')->updateOrInsert
    // (['apellidos' => 'Perez', 'nombre'=>'Sergio'],
    // ['email'=>'sergio_p@correo.com']);
    // dd($student);


    //ELIMINAR
    // $student=DB::table('Estudiante')->where('edad','=',30)->delete();
    // dd($student);
}
}