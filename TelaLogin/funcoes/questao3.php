<?php
    $sexo = "";
    $result = "";
    
    if(isset($_POST['verificar'])){
    
        $sexo = (string) strtoupper ($_POST['sexo']);

    if($sexo == "F"){
    $result = "O sexo e feminino";

    }
     else if($sexo == "M"){
    $result = "O sexo e masculino";
    }
    else {
            $result = "O sexo e invalido";
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
        <input type="text" name="sexo" value= <?= $sexo?> > <br>
        <input type="submit" value="verifica" name="verificar">
        <br><br>
        
        <p>Resultado da verificacao: <?= $result ?> </p>
    </form>

</body>
</html>