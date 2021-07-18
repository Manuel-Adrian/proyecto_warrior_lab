<?php
namespace App\Providers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'UserController@index');

Route::get('/warrior', function () {
    return "HOLA";
});

Route::get('/usuario/{id}', 'UserController@show')
->where('id', '[0-9]+') ;

Route::get('/prueba', 'UserController@prue');

Route::get('/hola', 'EstudianteController@index');

//Route::post('/agregar', 'EstudianteController@store')->name('store');
Route::post('/carpe', 'EstudianteController@store')->name('store');
Route::get('/carpe/consulta', 'EstudianteController@index');
Route::get('/carpe/edit', 'EstudianteController@edit');

