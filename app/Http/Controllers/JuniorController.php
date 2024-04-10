<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Junior;


class JuniorController extends Controller
{
    public function aumentarSalario(string $nome, int $salario, int $numInscricao, int $horasTrabalhadas, int $aumento){
        $aumentarSalario = new Junior ($nome, $salario, $numInscricao, $horasTrabalhadas);
        $aumentarSalario = aumentarSalario($aumento);
        return view('juiorAumentarsalario')
        ->with('salarioInicial',$salario)
        ->with('aumentarSalario',$aumentarSalario) 
        ->with('aumento',$aumento);
    }

}
