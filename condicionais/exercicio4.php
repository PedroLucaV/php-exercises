<?php 
//Elaborar um programa que leia três lados e verifique se eles podem ou não formar um triângulo. Para formar um triângulo, um dos lados não pode ser maior que a soma dos outros dois. Caso possam formar um triângulo, exiba qual o tipo do triângulo: Equilátero (3 lados iguais), Isósceles (2 lados iguais) e Escaleno(3 lados diferentes).

$lado1=6;
$lado2=4;
$lado3=3;

function analiaTriangulo($lado1, $lado2, $lado3){
    if($lado1 <=0 || $lado2 <=0 || $lado3 <= 0){
        return "Informe valores válidos para o triângulo";
    }
    else if($lado1 + $lado2 < $lado3 || $lado1 + $lado3 < $lado2 || $lado2 + $lado3 < $lado1){
        return "Não foi formado um triângulo!";
    }else{
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            return "Formou um triangulo do tipo Equilátero!";
        } else if ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            return "Formou um triangulo do tipo Isósceles!";
        } else {
            return "Formou um triangulo do tipo Escaleno!";
        }
    }
}

echo analiaTriangulo($lado1, $lado2, $lado3);
?>