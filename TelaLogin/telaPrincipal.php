<?php
header('Content-Type: text/html; charset=utf-8');
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Navegação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-primary-subtle">
<header class="text-center bg-primary text-white shadow-lg p-3 mb-5">
        <h1>Navegação Exercícios</h1>
        <h2>índice dos exercicios</h2>

        <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Lista Projetos</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
          
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </header>
    
<main>
        <div class="conteiner">
            <nav class="modulos d-flex flex-wrap">
                <div class="card mx-5 border-primary " style="width: 18rem;">
                    <div class="card-header bg-primary text-white">Funções</div>
                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="atividades.php?dir=funcoes&file=index">Minha primeira função</a>
                            </li>
                            <li>
                                <a href="atividades.php?dir=funcoes&file=questao1">Teste de navegação</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mx-5 border-primary  " style="width: 18rem;">
                    <div class="card-header bg-primary text-white">If/Else</div>
                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="atividades.php?dir=funcoes&file=questao1">Questão 1</a>
                            </li>
                            <li>
                            <a href="atividades.php?dir=funcoes&file=questao2">Questão 2</a>
                            </li>
                            <li>
                                <a href="atividades.php?dir=funcoes&file=questao3">Questão 3</a>
                            </li>
                            <li>
                            <a href="atividades.php?dir=funcoes&file=questao4">Questão 4</a>
                            </li>
                            <li>
                                <a href="atividades.php?dir=funcoes&file=questao5">Questão 5</a>
                            </li>
                            <li>
                            <a href="atividades.php?dir=funcoes&file=questao6">Questão 6</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mx-5 border-primary " style="width: 18rem;">
                    <div class="card-header bg-primary text-white">Tipos Literais</div>
                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="atividades.php?dir=funcoes&file=index">Calculadora</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
        </div>
    </main>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>