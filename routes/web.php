<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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


//METODOS
Route::get('/posts/criar',[PostController::class,'create']);
Route::get('/posts/carregar',[PostController::class,'ready']);
Route::get('/posts/carregar/todos',[PostController::class,'readyAll']);
Route::get('/posts/editar',[PostController::class,'update']);
Route::get('/posts/deletar',[PostController::class,'delete']);