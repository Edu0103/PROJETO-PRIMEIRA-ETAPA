<?php
    $n1 = 0;
    $n2 = 0;
    $result = "";
    
    if(isset($_POST['verificar'])){
    
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
    if($n1 > $n2){
    $result = "Numero 1 e maior";

    }
    else if($n1 < $n2){
        $result = "Numero 2 e maior"; 
    }
      else if  ($n1 = $n2){
            $result = "Os numeros sao iguais";
      }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
        Primeiro numero <br>
        <input type="number" name="n1" value= <?= $n1 ?> required > <br>
        Segundo numero  <br>
        <input type="number" name="n2" value= <?= $n2 ?> required  > <br>
        <input type="submit" value="verifica" name="verificar">
        <br><br>
        
        <p>Resultado da verificacao: <?= $result ?> </p>
    </form>

</body>
</html>