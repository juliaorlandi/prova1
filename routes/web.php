<?php

use Illuminate\Support\Facades\Route;

Route::get('/funcionario/junior/{nome}/{numInscricao}/{salario}/{horasTrabalhadas}/aumentarSalario/', 
    [App\Http\Controllers\JuniorController::class, 'aumentarSalario'])
    ->where('nome', '[a-zA-Z]+')
    ->where('numInscricao', '[0-9]+')
    ->where('salario', '[0-9]+')
    ->where('horasTrabalhadas', '[0-9]+');

Route::get('/', function () {
    return view('welcome');
});
