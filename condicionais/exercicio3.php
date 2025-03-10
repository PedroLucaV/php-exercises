<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            Valor a Sacar: <input type="text" name="saque" id="saque">
            <input type="submit" value="Sacar">
        </form>
    </body>
</html>

<?php 
//Em um determinado momento do dia, apenas notas de 10, 50 e 100 estão disponíveis em um terminal de caixa eletrônico. Elaborar um programa que leia um valor de saque de um cliente, verifique sua validade (ou seja, se pode ser pago com as notas disponíveis) e informe o número mínimo de notas de 100,50,10.

function saque($valor){
    if($valor%100 ==0 || $valor%50==0 || $valor%10==0){
        $ced100= $valor/100;
        $ced100= (int)$ced100;
        $ced50 = $valor % 100 / 50;
        $ced50 = (int)$ced50;
        $ced10 = $valor % 100 % 50 / 10;
        $ced10 = (int)$ced10;
        return "O minímo de cédulas para este saque é de: <br>Cedúlas de R100: $ced100<br>Cedúlas de R50: $ced50<br>Cedúlas de R10: $ced10";
    }else{
        return "Não será possivél realizar o saque de $valor";
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $valorASacar = $_POST["saque"];
    echo saque($valorASacar);
}
?>