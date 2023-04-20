<?php
    $n1 = 0;
    $n2 = 0;
    $result = 0;
    $calc = "somar";

    if(isset($_POST['calcular'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['calcular'];

        $result = $n1 + $n2;

        if($calc == '-'){
            $result = $n1 - $n2;
        }
        else if($calc == '*'){
    
            $result = $n1 * $n2;
        }
        else if($calc == '/'){
        
                $result = $n1 / $n2;
            
        }
    }
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="border 10px d-flex justify-content-center position-absolute top-50 start-50 translate-middle mx-auto" style="width: 200px";"><form method="post">
        Primeiro numero <br>
        <input type="number" name="n1" value= <?= $n1 ?> required > <br>
        Segundo numero  <br>
        <input type="number" name="n2" value= <?= $n2 ?> required  > <br> <br>
        <div class=" ">
            <div class="row"> 
       <div class="col" style="margin-left: 10px"> <input type="submit" value="+" name="calcular" class="btn btn-dark"></div>
       <div class="col "> <input type="submit" value="-" name="calcular" class="btn btn-dark"></div>
            </div>

            <div class="row" style="margin-top: 30px">
            <div class="col " style="margin-left: 10px"><input type="submit" value="*" name="calcular" class="btn btn-dark"></div>
            <div class="col "> <input type="submit" value="/" name="calcular" class="btn btn-dark"></div>
            </div>
        </div>
        <br><br>
        
        <p>Resultado da operacao: <?= $result ?> </p>
    </form></div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

