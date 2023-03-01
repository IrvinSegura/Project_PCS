<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\LoginController;
use App\Models\Login;
use App\Models\Persona;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', [FormularioController::class, 'index'])->name('index.dato');
Route::post('/contacto/datos', [FormularioController::class, 'datos'])->name('formulario.dato');

Route::get('/register', [LoginController::class, 'login_inicio'])->name('login_inicio.dato');
Route::post('/login/datos', [LoginController::class, 'login_datos'])->name('login_datos.dato');

Route::get('/login', [LoginController::class, 'login_login'])->name('login_obtenerDatos.dato');
Route::post('/login/verificar', [LoginController::class, 'login_usuario'])->name('login_obtencion_datos.dato');


Route::get('/login/mostrar', [LoginController::class, 'login_mostrar'])->name('login_mostrar.dato');
Route::get('/login/ordenamiento', [LoginController::class, 'login_ordenamiento'])->name('login_ordenamiento.dato');
Route::get('/login/ordenamiento/descendiente', [LoginController::class, 'login_ordenamiento_descendiente'])->name('login_ordenamiento2.dato');
Route::get('/login/buscar_datos', [LoginController::class, 'login_buscar_nombre'])->name('login_buscar_datos.dato');
Route::get('/login/actualizar_nombre', [LoginController::class, 'login_actualizar_nombre'])->name('login_editar_datos.dato');
