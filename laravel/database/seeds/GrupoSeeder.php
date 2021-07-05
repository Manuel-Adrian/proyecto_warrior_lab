<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    //INSERTAR DATOS
        //DB::insert('INSERT INTO Grupo (id_estudiante,semestre,grupo,turno) VALUES(3,"1ero","1fv","vespertino")');
        // DB::table('Grupo')->insert([
        //     'id_estudiante' => 2, 'semestre' => '4mo',
        //     'grupo' => '8AA', 'turno' => 'Vespertino'
        //);
        //BUSCAR DATOS

    //     $Consul=DB::table('Grupo')->where('id_estudiante','2')->first();
    // dd($Consul);
        // $Consul=DB::table('Grupo')->pluck('id_estudiante');
        // dd($Consul);
        $Consul=DB::table('Grupo')->select('*')->get();
         dd($Consul);
        // ]);

    //     // //ACTUALIZAR
    // $Consul=DB::table('Grupo')->updateOrInsert
    // (['id_estudiante' => 2, 'turno'=>'Vespertino'],
    // ['grupo'=>'3CC']);
    // dd($Consul);

    // $Consul=DB::table('Grupo')->updateOrInsert
    // (['id_estudiante' => 2, 'turno'=>'Vespertino'],
    // ['semestres'=>'3ero']);
    // dd($Consul);



    // // //ELIMINAR
    // $Consul=DB::table('Grupo')->where('id_estudiante','=',2)->delete();
    // dd($Consul);
    }
}
