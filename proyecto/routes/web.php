<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('articulos','App\Http\Controllers\ArticuloController');
Route::resource('/','App\Http\Controllers\ArticuloController');

Route::resource('empleados','App\Http\Controllers\EmpleadoController',['except' => ['index','show']]);
Route::get('empleados/{area}/{id}',[EmpleadoController::class, 'mostrar']);
Route::get('empleados/{id}',[EmpleadoController::class, 'index']);

/*Route::get('/plantilla', function () {
    return view('plantilla');
}); */



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('empleados/1', function () {
})->name('profesores');

Route::get('empleados/2', function () {
})->name('registraduria');

Route::get('empleados/3', function () {
})->name('asistentes');

Route::get('empleados/4', function () {
})->name('salud');

Route::get('empleados/5', function () {
})->name('recaudacion');



/*Route::get('/Login', function () {
    return view('Articulos.Login');
});
Route::get('/Registrarse', function () {
    return view('Articulos.Registrarse');
});
Route::get('/Index', function () {
    return view('Articulos.Index');
});
Route::get('/Artc', function () {
    return view('Articulos.Artc');
});
Route::get('/Editar', function () {
    return view('Articulos.EditarArticulo');
});
Route::get('/Empleados', function () {
    return view('Articulos.Empleados');
});
*/