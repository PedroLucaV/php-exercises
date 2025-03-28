<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            Termos: <input type="text" name="ftermos" id="ftermos">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

<?php
$a = 2;
$b = 7;
$c = 3;

function padrao($a, $b, $c, $qnt){
    $arr = [];
    for($i = 0; $i < $qnt; $i++){
        $arr[] = $a;
        $arr[] = $b;
        $arr[] = $c;
        $a*=2;
        $b*=3;
        $c*=4;
    }
    return $arr;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $termos = $_POST['ftermos'];
    $serie = padrao($a, $b, $c, $termos);
    array_splice($serie, $termos);
    $res = implode(', ', $serie);
    echo('Os termos da série são: '.$res);
}
?>

<?php 

?>