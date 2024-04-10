<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Senior;


class SeniorController extends Controller
{
    public function aumentarSalario(int $salario, int $horasTrabalhadas){
        $aumentarSalario = new Senior ($salario, $horasTrabalhadas);
        return view('aumentarSalario') 
        ->with('aumento',$aumento);
    }
}
