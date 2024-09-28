<?php

use App\Http\Controllers\FincaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropietarioController;
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

Route::get('/', HomeController::class);


Route::controller(FincaController::class)->group(function () {
    Route::get('fincas', 'index')->name('fincas.index');
    Route::get('fincas/create', 'create')->name('fincas.create');
    Route::post('fincas', 'store')->name('fincas.store');
    Route::get('fincas/{finca}', 'show')->name('fincas.show');
    Route::get('fincas/{finca}/edit', 'edit')->name('fincas.edit');
    Route::put('fincas/{finca}', 'update')->name('fincas.update');
});

Route::controller(PropietarioController::class)->group(function () {
    Route::get('propietarios', 'index')->name('propietarios.index');
    Route::get('propietarios/create', 'create')->name('propietarios.create');
    Route::post('propietarios', 'store')->name('propietarios.store');
    Route::get('propietarios/{propietario}', 'show')->name('propietarios.show');
    Route::get('propietarios/{propietario}/edit', 'edit')->name('propietarios.edit');
    Route::put('propietarios/{propietario}', 'update')->name('propietarios.update');
});