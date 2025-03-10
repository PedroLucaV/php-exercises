<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            Lado 1: <input type="text" name="flado1" id="flado1">
            Lado 2: <input type="text" name="flado2" id="flado2">
            Lado 3: <input type="text" name="flado3" id="flado3">
            <input type="submit" value="Analisar">
        </form>
    </body>
</html>

<?php 
//Elaborar um programa que leia três lados e verifique se eles podem ou não formar um triângulo. Para formar um triângulo, um dos lados não pode ser maior que a soma dos outros dois. Caso possam formar um triângulo, exiba qual o tipo do triângulo: Equilátero (3 lados iguais), Isósceles (2 lados iguais) e Escaleno(3 lados diferentes).

function analisaTriangulo($lado1, $lado2, $lado3){
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

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $lado1 = $_POST["flado1"];
    $lado2 = $_POST["flado2"];
    $lado3 = $_POST["flado3"];
    echo analisaTriangulo($lado1, $lado2, $lado3);
}
?>