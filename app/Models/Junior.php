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
    public function setHorasTrabalhadas(){
        $this->horasTrabalhadas = $horasTrabalhadas;
    }


    public function aumentarSalario() {
        if($this->horasTrabalhadas>80){
            return parent::aumentarSalario();
        } else {
            return "Não recebeu aumento";
        }
        
    }

    public function __construct($horasTrabalhadas){
        parent::__construct($nome,$salario,$numInscricao);
        $this->setHorasTrabalhadas($horasTrabalhadas);
    }

}
