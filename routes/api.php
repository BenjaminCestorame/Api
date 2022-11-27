<?php
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProvinciaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/provincia', [ProvinciaController::class, 'getProvincia']);

// Route::get('/provincias/{id}', [ProvinciaController::class, 'getProvinciaConParametro']);

// Route::get('/provinciasAlternativa/{id?}', [ProvinciaController::class, 'getProvinciaAlternativa']);

// // Ruta para visualizar todas las provincias registradas en la base de datos
 Route::get('/provincias', [ProvinciaController::class, 'index']);
// //Ruta para el registro de una provincia en la base de datos

Route::get('/holamundo', [ProvinciaController::class,'Holamundo']);

Route::post('/insert-provincias', [ProvinciaController::class, 'store']);


Route::get('/inicio', [UsuariosController::class,'index']);
Route::post('/insertando', [UsuariosController::class,'store']); 