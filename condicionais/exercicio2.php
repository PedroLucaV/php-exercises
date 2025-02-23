<?php
//Elaborar um programa que leia um número e calcule sua raiz quadrada. Caso a raiz seja exata (quadrados perfeitos), informá-la, caso contrário, informe: ‘Não há raiz exata para ..’

function raiz($numero){
    $raiz = sqrt($numero);
    $raizInteira = (int)$raiz;

    if($raiz == $raizInteira){
        return "A Raiz de $numero é $raiz";
    }else{
        return "Não há raiz exata para $numero";
    }
}

echo raiz(4)
?>