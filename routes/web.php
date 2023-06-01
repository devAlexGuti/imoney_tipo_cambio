<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModeradorController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
  return view('auth.login');
});

/*
Route::get('/home', function () {
  return view('home');
})->middleware('auth');
*/



Route::resource('/user', UserController::class)->middleware('verified');
Route::resource('/moder', ModeradorController::class);


//Admin
Route::get('/admin/usuarios', [App\Http\Controllers\Admin\UsuarioController::class, 'index'])->name('admin.usuarios');
Route::post('/admin/usuarios/registro', [App\Http\Controllers\Admin\UsuarioController::class, 'registro'])->name('admin.usuarios.registro');
Route::post('/admin/usuarios/{usuarioId}/actualizar', [App\Http\Controllers\Admin\UsuarioController::class, 'actualizar'])->name('admin.usuarios.actualizar');
Route::delete('/admin/usuarios/{usuarioId}/eliminar', [App\Http\Controllers\Admin\UsuarioController::class, 'eliminar'])->name('admin.usuarios.eliminar');

Route::get('/admin/tipocambio', [App\Http\Controllers\Admin\TipoCambioController::class, 'index'])->name('admin.tipocambio');
Route::post('/admin/tipocambio/registro', [App\Http\Controllers\Admin\TipoCambioController::class, 'registro'])->name('admin.tipocambio.registro');
Route::post('/admin/tipocambio/{tipocambioId}/actualizar', [App\Http\Controllers\Admin\TipoCambioController::class, 'actualizar'])->name('admin.tipocambio.actualizar');
Route::delete('/admin/tipocambio/{tipocambioId}/eliminar', [App\Http\Controllers\Admin\TipoCambioController::class, 'eliminar'])->name('admin.tipocambio.eliminar');

Auth::routes(['verify' => true]);


