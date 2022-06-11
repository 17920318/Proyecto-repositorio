<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\FiltroController;
use App\Http\Controllers\AltaController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\ListaCoordinacionController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\FiltradoController;
use App\Http\Controllers\ArchivoController;
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

Route::get('/', function () {

    return view('welcome' );
});

Route::get('welcome', [BusquedaController::class,'welcome']);
Route::get('download/{archivo}', [DropzoneController::class,'download'])->name('download');
Route::get('download/{archivo}', [FiltradoController::class,'download'])->name('download');
Route::resource('tema', TemaController::class);
Route::resource('template', TemplateController::class);
//Route::resource('filtro', FiltroController::class);
Route::resource('lista', ListaCoordinacionController::class);
Route::resource('edit', AltaController::class);
Route::get('dropzone', [DropzoneController::class,'dropzone']);
Route::post('dropzone-store', [DropzoneController::class,'dropzoneStore'])->name('dropzone.store');

Auth::routes(['register'=> true, 'reset' => false, 'verify'=>false]);
//Route::post('archivo-store', [ArchivoController::class,'store'])->name('archivo.store');

//Route::get('/login', [LoginController::class, 'login'])->name('login');
//Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.authenticate');
Route::post("/logout",[LogoutController::class,"store"])->name("logout");
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::get('/login', [UsuarioController::class,'login']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('busqueda', BusquedaController::class);
//Route::get('busqueda', FiltroController::class);

//Route::get('repositorio', [RepositorioController::class,'index'])->name('index');
// rutas  // //
Route::get('formulario/{id}', [FiltradoController::class,'formularioBusqueda'])->name('formulario');
Route::post('filtrado', [FiltradoController::class,'filtradoRespuesta'])->name('filtrado');
Route::delete('delete/{id}', [FiltradoController::class,'delete'])->name('delete');

