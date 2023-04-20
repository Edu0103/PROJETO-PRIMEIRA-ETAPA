<?php
    $n1 = 0;
    $n2 = 0;
    $n3 = 0;
    $result = "";
    
    if(isset($_POST['verificar'])){
    
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $n3 = (int)$_POST['n3'];
    if($n1 < $n2 && $n1 < $n3){
    $result = "Produto 1 mais barato";

    }

    else if($n1 > $n3 && $n2 < $n1 && $n3 == $n2){
        $result = "Produto 2 e 3 mais barato"; 
    }

    else if($n1 < $n3 && $n2 < $n3 && $n1 == $n2){
        $result = "Produto 1 e 2 mais barato"; 
    }
    else if($n2 > $n3 && $n1 < $n2 && $n1 == $n3){
        $result = "Produto 1 e 3 mais barato"; 
    }
    else if($n1 > $n2 && $n2 < $n3){
        $result = "Produto 2 mais barato"; 
    }
      else if  ($n1 > $n3 && $n3 < $n2){
            $result = "Produto 3 mais barato";
      }
    
    else if($n1 == $n3 && $n3 == $n2 && $n1 == $n2){
        $result = "Produtos com mesmo valores";
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
        Primeiro produto <br>
        <input type="number" name="n1" value= <?= $n1 ?> required > <br>
        Segundo produto  <br>
        <input type="number" name="n2" value= <?= $n2 ?> required  > <br>
        Terceiro produto  <br>
        <input type="number" name="n3" value= <?= $n3 ?> required  > <br>
        <input type="submit" value="verifica" name="verificar">
        <br><br>
        
        <p>Resultado da verificacao: <?= $result ?> </p>
    </form>

</body>
</html>