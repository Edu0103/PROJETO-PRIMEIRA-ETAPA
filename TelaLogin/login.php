<?php

$email = " ";
$senha = " ";


if (isset($_POST['cadastrar'])) {
    $email = (string) $_POST['email'];
    $senha = (int) $_POST['senha'];
}
ini_set('default_charset', 'utf-8');
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">


</head>

<body class="bg-primary-subtle">

    <form class=" container-md-5 position-absolute top-50 start-50 translate-middle border border-light p-3 text-center ">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3" class="text-center">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
        </div>

        <button type="submit" class="btn btn-outline-secondary" name="entrar">Entrar</button>
        <button type="submit" class="btn btn-outline-secondary" name="cadastrar">Cadastrar</button>
        <button type="submit" class="btn btn-outline-secondary" name="esqueci">Esqueci Minha Senha</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>


</body>

</html>