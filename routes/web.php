<?php

use Illuminate\Support\Facades\Route;

Route::get('/funcionario/junior/{nome}/{numInscricao}/aumentarSalario/', 
[App\Http\Controllers\JuniorController::class, 'aumentarSalario'])
->where('salario', '[0-9]+')
->where('horasTrabalhadas', '[0-9]+');

Route::get('/', function () {
    return view('welcome');
});
