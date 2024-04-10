<?php

namespace App;

interface InterfaceFuncionario
{
    public function aumentarSalario($horasTrabalhadas, $salario);

    public function calcularImposto($salario);
}
