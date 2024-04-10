<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pleno;

class PlenoController extends Controller
{
    public function aumentarSalario(int $salario, int $horasTrabalhadas){
        $aumentarSalario = new Pleno ($salario, $horasTrabalhadas);
        return view('aumentarSalario') 
        ->with('aumento',$aumento);
    }
}
