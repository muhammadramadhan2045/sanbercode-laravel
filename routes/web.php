<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
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

// Route::get('/', function () {
//     return view('/day1_index');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/welcome', [AuthController::class, 'welcome']);
Route::get('/master', function(){
    return view('layout.master');
});
Route::get('/table', function(){
    return view('table');
});
Route::get('/data-table', function(){
    return view('datatable');
});

//CRUD ELOQUENT pada tabel film
Route::get('/film/create', [FilmController::class, 'create']);
Route::post('/film', [FilmController::class, 'store']);
Route::get('/film', [FilmController::class, 'index']);
Route::get('/film/{film_id}', [FilmController::class, 'show']);
Route::get('/film/{film_id}/edit', [FilmController::class, 'edit']);
Route::post('/film/{film_id}', [FilmController::class, 'update']);
Route::delete('/film/{film_id}', [FilmController::class, 'destroy']);


//CRUD cast
//create pada form 
Route::get('/cast/create', [CastController::class, 'create']);
//store pada database
Route::post('/cast', [CastController::class, 'store']);  

//READ cast
//tampilkan data
Route::get('/cast', [CastController::class, 'index']);
//detail data
Route::get('/cast/{cast_id}', [CastController::class, 'show']);


//UPDATE cast
//tampilkan form untuk edit
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
//update data ke db berdasarkan id  
Route::put('/cast/{cast_id}', [CastController::class, 'update']);


//DELETE cast
//hapus data berdasarkan id
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);