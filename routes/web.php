<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\AltaController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\ListaCoordinacionController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\BusquedaController;

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
    return view('welcome');
});


Route::resource('tema', TemaController::class);
Route::resource('template', TemplateController::class);
//Route::resource('busqueda', HeaderController::class);
Route::resource('lista', ListaCoordinacionController::class);
//Route::resource('alta', AltaController::class);
Route::get('dropzone', [DropzoneController::class,'dropzone']);
Route::post('dropzone-store', [DropzoneController::class,'dropzoneStore'])->name('dropzone.store');
Auth::routes(['register'=> false, 'reset' => false, 'verify'=>false]);

//Route::get('/login', [LoginController::class, 'login'])->name('login');
//Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.authenticate');
Route::post("/logout",[LogoutController::class,"store"])->name("logout");
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::get('/login', [UsuarioController::class,'login']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('busqueda', BusquedaController::class);
//Route::get('repositorio', [RepositorioController::class,'index'])->name('index');
