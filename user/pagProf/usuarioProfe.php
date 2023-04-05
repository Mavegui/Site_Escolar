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
   
    <!-- Criação das ferramentas do professor! -->
    
    <!-- Criar provas -->
   
    <div class="content">
    
    <div class="card mt-3">
    <h5 class="card-header">Criar prova</h5>
    <div class="card-body">

    <h5 class="card-title">Criação de provas</h5>
    <p class="card-text">Crie sua prova e logo depois ela será disponiblizada para os alunos fazerem.</p>
    <a href="criarProva.php" class="btn btn-primary">Criar</a>

    </div>
    </div>

    <!-- Média dos alunos -->
    
    <div class="card mt-3">
    <h5 class="card-header">Ver aprovados</h5>
    <div class="card-body">

    <h5 class="card-title">Média dos alunos</h5>
    <p class="card-text">Ver resultados das provas e quem passou ou não.</p>
    <a href="./provaConfig/mediaAlunos.php" class="btn btn-primary">Visualizar</a>

    </div>
    </div>

    <!-- RESULTADOS DAS AVALIAÇÕES -->
    
    <div class="card mt-3">
    <h5 class="card-header">Configurar provas</h5>
    <div class="card-body">

    <h5 class="card-title">Gerenciar questões da prova</h5>
    <p class="card-text">Atualizar, excluir e ver questões existentes.</p>
    <a href="showPerguntas.php" class="btn btn-primary">Checar</a>

    </div>
    </div>

    </div>

    
    </div>

    <div class="footer l-box is-center">

        Criado por Gui, usando pure css.

    </div>
</body>
</html>