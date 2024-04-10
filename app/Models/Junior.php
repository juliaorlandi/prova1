<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Funcionario;

class Junior extends Funcionario
{
    private $horasTrabalhadas;
    public function getHorasTrabalhadas(){
        return $this->horasTrabalhadas;
    }
    public function setHorasTrabalhadas($horasTrabalhadas){
        $this->horasTrabalhadas = $horasTrabalhadas;
    }


    public function aumentarSalario($salario) {
        if($this->horasTrabalhadas>80){
            return parent::aumentarSalario($salario);
        } else {
            return "Não recebeu aumento";
        }
        
    }

    public function __construct($nome,$salario,$numInscricao,$horasTrabalhadas){
        parent::__construct($nome,$salario,$numInscricao);
        $this->setHorasTrabalhadas($horasTrabalhadas);
    }

}
