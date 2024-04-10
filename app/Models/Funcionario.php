<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\InterfaceFuncionario;

abstract class Funcionario extends Model implements InterfaceFuncionario
{
    use HasFactory;

    private $nome;
    private $salario;
    private $numInscricao;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }


    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }


    public function getNumInscricao(){
        return $this->numInscricao;
    }
    public function setNumInscricao($numInscricao){
        $this->numInscricao = $numInscricao;
    }


    public function calcularImposto($salario){
        $ir = $this->salario*1.11;
        $inss = $this->salario*1.08;
        $sindicato = $this->salario*1.05;
    }

    public function aumentarSalario($salario) {
       $aumento = $this->salario*1.10;
    }


    public function __construct($nome,$salario,$numInscricao){
        $this->setNome($nome);
        $this->setSalario($salario);
        $this->setNumInscricao($numInscricao);
    }

}
