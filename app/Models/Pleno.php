<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Funcionario;


class Pleno extends Funcionario
{
    private $horasTrabalhadas;
    public function getHorasTrabalhadas(){
        return $this->horasTrabalhadas;
    }
    public function setHorasTrabalhadas(){
        $this->horasTrabalhadas = $horasTrabalhadas;
    }


    public function aumentarSalario() {
        if($this->horasTrabalhadas>100){
            return $this->salario*1.15;
        } else {
            return parent::aumentarSalario();
        }
        
    }
}
