<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            Informe o valor de N (Inteiro e Positivo): <input type="number" name="fnumber" id="fnumber">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

<?php
function factorial($numero){
        $fatorial = 1;
        for($i = 1; $i <= $numero; $i++){
            $fatorial *= $i;
        }
        return $fatorial;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $n = $_POST['fnumber'];
    $E = 1;
    if(is_nan($n) || $n < 0){
        echo("O Valor de N não pode ser negativo ou não inteiro.");
    }else{
        for($i = 1; $i <= $n; $i++){
            $fatorial = factorial($i);
            $E += 1/$fatorial;
        }
        echo number_format($E, 2, ',', '.');
    }
}
?>

<?php 

?>