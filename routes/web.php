<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\FiltroController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\ListaCoordinacionController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\FiltradoController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\MostrarController;
use App\Http\Controllers\ContactosController;
use App\Models\Tipomaterial;

use App\Models\Rol;
//use App\Http\Controllers\UsuarioController;

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


Route::get('welcome', [BusquedaController::class,'welcome']);
//Route::get('hola', [BusquedaController::class,'paginacion'])->name('hola');
Route::get('login', [LoginController::class,'inicio']);
//Route::get('download/{archivo}', [DropzoneController::class,'download'])->name('download');
Route::get('download/{id}', [FiltradoController::class,'download'])->name('download');
route::get('/phpinfo', function(){phpinfo();});

Route::resource('tema', TemaController::class);
//Route::resource('todo', AltaController::class);
Route::resource('template', TemplateController::class);
Route::resource('lista', ListaCoordinacionController::class);
Route::resource('filtrados', ArchivoController::class);
//Route::resource('edit', AltaController::class);
Route::get('dropzone', [DropzoneController::class,'dropzone']);
Route::post('dropzone-store', [DropzoneController::class,'dropzoneStore'])->name('dropzone.store');

Auth::routes(['register'=> true, 'reset' => false, 'verify'=>false]);
Route::post("/logout",[LogoutController::class,"store"])->name("logout");
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('busqueda', BusquedaController::class);
Route::get('formulario/{id}', [FiltradoController::class,'formularioBusqueda'])->name('formulario');
Route::post('filtrado', [FiltradoController::class,'filtradoRespuesta'])->name('filtrado');
Route::get('todo/{id}', [TodoController::class,'store'])->name('todo');

Route::delete('delete/{id}', [FiltradoController::class,'delete'])->name('delete');

Route::resource('mostrar', MostrarController::class);
//Route::get('informacion', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::redirect('/informacion', '/there');
Route::view('/informacion', 'informacion');

//Route::get('url/{url}', [BusquedaController::class,'url'])->name('url');

//Route::get('contactos', 'ContactosController@contactos');
Route::get('contactos', [ContactosController::class,'contactos'])->name('contactos');
Route::post('contactos', [ContactosController::class,'contactosPost'])->name('contactos');

Route::get('result', [ListaCoordinacionController::class,'paginacion'])->name('result');