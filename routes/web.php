<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TerceroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/novo-parking', function () {
    return view('novo-parking');
});

Route::get('/novo-parking/formulario', [TerceroController::class, 'mostrar']);
Route::post('/novo-parking/formulario', [TerceroController::class, 'guardar']);