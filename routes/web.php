<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TerceroController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/formulario', [TerceroController::class, 'mostrar']);
Route::post('/formulario', [TerceroController::class, 'guardar']);