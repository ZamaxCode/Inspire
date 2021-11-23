<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\PublicacionController;
use App\Models\Categoria;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

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
    return view('informacion_inspire.index');
});

Route::get('/informacion/courses', function () {
    return view('informacion_inspire/courses');
})->name('informacion.courses');

Route::get('/informacion/about', function () {
    return view('informacion_inspire/about');
})->name('informacion.about');

Route::get('/informacion/contact', function () {
    return view('informacion_inspire/contact');
})->name('informacion.contact');

Route::get('/informacion/index', function () {
    return view('informacion_inspire/index');
})->name('informacion.index');

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

Route::get('/auth/github/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/github/callback', function () {
    $githubUser = Socialite::driver('github')->user();

    $user = User::firstOrCreate(
        [
            'provider_id' => $githubUser->getId()
        ],
        [
            'email' => $githubUser->getEmail(),
            'name' => $githubUser->getName(),
            'password'=>Hash::make($githubUser->getName()),
            'provider_id'=>$githubUser->getId(),
        ]

    );

    auth()->login($user, true);

    return redirect('/informacion/index');
    
});


