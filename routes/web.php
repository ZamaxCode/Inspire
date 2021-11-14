<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\PublicacionController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('publicacion/');
})->name('dashboard');
