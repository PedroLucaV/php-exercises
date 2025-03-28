<?php 
    $cidades = [
        ['codigo'=>1, 'veic_passeio'=>1000, 'numero-acidentes'=>1000],
        ['codigo'=>2, 'veic_passeio'=>2000, 'numero-acidentes'=>500],
        ['codigo'=>3, 'veic_passeio'=>3000, 'numero-acidentes'=>6000],
        ['codigo'=>4, 'veic_passeio'=>4000, 'numero-acidentes'=>4000],
        ['codigo'=>5, 'veic_passeio'=>5000, 'numero-acidentes'=>5000]
    ];
    
    //Media de acidentes em cidades com menos de 2000 pessoas
    $mediaAcidentesMenos2000 = 0;
    $menos2000Acidentes = 0;
    foreach ($cidades as $cidade){
        if($cidade['numero-acidentes'] < 2000){
            $mediaAcidentesMenos2000 += $cidade['numero-acidentes'];
            $menos2000Acidentes++;
        }
    }
    $mediaAcidentesMenos2000 = $mediaAcidentesMenos2000 / $menos2000Acidentes;

    //Media de veiculos na cidade
    $mediaVeiculos=0;
    foreach ($cidades as $cidade){
        $mediaVeiculos += $cidade['veic_passeio'];
    }
    $mediaVeiculos = $mediaVeiculos / count($cidades);

    //Cidade com maior indice de acidentes
    $maiorIndice = ['numero'=>0, 'cidade'=>0];

    foreach ($cidades as $cidade){
        if($cidade['numero-acidentes'] > $maiorIndice['numero']){
            $maiorIndice['numero'] = $cidade['numero-acidentes'];
            $maiorIndice['cidade'] = $cidade['codigo'];
        }
    }
    
    //Cidade com menor indice de acidentes
    $menorIndice = ['numero'=>INF, 'cidade'=>0];

    foreach ($cidades as $cidade){
        if($cidade['numero-acidentes'] < $menorIndice['numero']){
            $menorIndice['numero'] = $cidade['numero-acidentes'];
            $menorIndice['cidade'] = $cidade['codigo'];
        }
    }

    echo "Media de veiculos: " . $mediaVeiculos . "<br>";
    echo "Media de acidentes em cidades com menos de 2000 pessoas: " . $mediaAcidentesMenos2000 . "<br>";
    echo "Cidade com maior indice de acidentes: " . $maiorIndice['cidade'] . "<br>";
    echo "Cidade com menor indice de acidentes: " . $menorIndice['cidade'] . "<br>";
?>