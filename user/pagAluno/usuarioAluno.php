<?php

include ("../../config/proteger.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conhecimento na mão</title>
    
    <!-- CDN's do framework's-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../estilo/style.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">

</head>
<body>

    <div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal">
    
    <a class="pure-menu-heading" href="">Conhecimento na mão</a>
    
    <ul class="pure-menu-list">
        <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item"><a href="../../config/logout.php" class="pure-menu-link">Sair</a></li>
    </ul>
    
    </div>
    </div>
    
    <!-- Criação das ferramentas do aluno! -->
    
    <!-- PERFIL ALUNO -->
    
    <div class="content">

    <div class="card mt-3">
    <h5 class="card-header">Perfil</h5>
    <div class="card-body">

    <h5 class="card-title">Editar perfil</h5>
    <p class="card-text">Visualizar perfil ou editar</p>
    <a href="perfilAluno.php" class="btn btn-primary btn-sm">Personalizar</a>

    </div>
    </div>

    <!-- PROVAS PENDENTES -->
    
    <div class="card mt-2">
    <h5 class="card-header">Provas</h5>
    <div class="card-body">

    <h5 class="card-title">Resolver prova</h5>
    <p class="card-text">Resolva as questões e no final já tenha a resposta.</p>
    <a href="provas.php" class="btn btn-primary btn-sm">Resolver</a>

    </div>
    </div>

    <!-- RESULTADOS DAS AVALIAÇÕES -->
    
    <div class="card mt-3">
    <h5 class="card-header">Classificações</h5>
    <div class="card-body">

    <h5 class="card-title">Classificação dos alunos</h5>
    <p class="card-text">Com base nos resultados classificamos os alunos, um forma de estímulo e competitividade para aprendizado.</p>
    <a href="#" class="btn btn-primary btn-sm">Checar</a>

    </div>
    </div>

    </div>
    
        
    <div class="footer l-box is-center">

        Criado por Gui, usando pure css.

    </div>

</body>
</html>