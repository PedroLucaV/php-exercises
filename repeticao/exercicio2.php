<?php
/**
 * Um funcionário de uma empresa recebe um aumento salarial anualmente. Sabe-se que:
 * Esse funcionário foi contratado em 2005, com o salário inicial de R$1.000,00.
 * Em 2006, ele recebeu um aumento de 1,5% sobre seu salário inicial.
 * A partir de 2007 (inclusive), os aumentos salariais sempre corresponderam ao dobro do percentual do ano anterior
 * Faça um algoritmo que determine o salário atual desse funcionário.
 */

function res($salario){
    for($ano = 2006;$ano <= 2025; $ano++){
        if($ano == 2006){
            $salario = $salario + ($salario*0.015);
        }
        else{
            echo($salario = $salario + ($salario*0.015*2));
        }
    }
    return $salario;
}

echo "O salário atual do funcionário é: R$".number_format(res(1000), 2, ',', '.');
?>