<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\CursoController;
use Illuminate\Routing\Router;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

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

Route::get('/',homecontroller::class);

Route::controller(CursoController::class)-> group(Function(){
    Route::get('/curso/crear',  'create');
    Route::get('/curso', 'index' );
    Route::get('/curso/hola/{nombre}', 'show');
});