<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Junior;


class JuniorController extends Controller
{
    public function aumentarSalario(int $salario, int $horasTrabalhadas){
        $aumentarSalario = new Junior ($salario, $horasTrabalhadas);
        return view('aumentarSalario') 
        ->with('aumento',$aumento);
    }


}
