<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\PublicacionController;
use App\Models\Categoria;
use Illuminate\Support\Facades\Route;

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
    return redirect('publicacion/');
});

/*
Route::get('/test', function () {
    return view('inspire/publicacion_create');
});
*/

Route::resource('publicacion', PublicacionController::class);
Route::resource('comentario', ComentarioController::class);

Route::get('publicacion/categoria/{categoria}', function(Categoria $categoria){
    $categorias = Categoria::all();
    $publicaciones = $categoria->publicaciones;
    return view('inspire/publicacion_index', compact('publicaciones','categorias'));
})->name('publicacion.index_categorias');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('publicacion/');
})->name('dashboard');
