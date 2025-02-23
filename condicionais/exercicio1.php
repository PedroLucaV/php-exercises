<?php
//Sabendo que o fuso horário da França em relação ao Brasil é de + 5 horas (no horário de verão na França), elaborar um programa que leia a hora no Brasil e informe a hora na França.

$horaBrasil = 22;

function horaBrazilFranca($hora){
    $horaFranca = $hora+5;

    if($hora > 24 || $hora <0){
        return "Informe um valor de hora entre 0 e 24!";
    }else if($horaFranca > 24){
        $horaFranca-=24;
    }

    return $horaFranca;
}

echo horaBrazilFranca($horaBrasil);

?>