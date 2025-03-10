<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            Hora Brasil: <input type="text" name="horaBrasil" id="horaBrasil">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

<?php
//Sabendo que o fuso horário da França em relação ao Brasil é de + 5 horas (no horário de verão na França), elaborar um programa que leia a hora no Brasil e informe a hora na França.

function horaBrazilFranca($hora){
    $horaFranca = $hora+5;

    if($hora > 24 || $hora <0){
        return "Informe um valor de hora entre 0 e 24!";
    }else if($horaFranca > 24){
        $horaFranca-=24;
    }

    return $horaFranca;
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $hora_brasil = $_POST['horaBrasil'];
    if(empty($hora_brasil)){
        echo "O Valor não pode ser vazio!";
    }else{
        echo "$hora_brasil horas no Brasil são: ".horaBrazilFranca($hora_brasil)." horas na França";
    }    
}
?>