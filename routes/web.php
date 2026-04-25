<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TerceroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

Route::get('/formulario', [TerceroController::class, 'mostrar']);
Route::post('/formulario', [TerceroController::class, 'guardar']);