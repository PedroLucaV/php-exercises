<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            Raiz: <input type="text" name="fraiz" id="fraiz">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

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

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $raiz = $_POST['fraiz'];
    if(empty($raiz)){
        echo "A raiz não pode ser vazia!";
    }else{
        echo raiz($raiz);
    }    
}
?>