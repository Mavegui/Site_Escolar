<?php

include ("../../config/proteger.php");
include ("../../bd/conexao.php");

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
<form action="./alunoConfig/salvarRespostas.php" method="POST">

<!-- MENU -->

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal">
        <a class="pure-menu-heading" href="">Conhecimento na mão</a>
        
        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="../../config/logout.php" class="pure-menu-link">Sair</a></li>
        </ul>
    </div>
</div>

<!-- BD CODIG -->

<?php  

$sql= "SELECT * FROM prova";
$sql_query = $mysqli-> query($sql) or die ($mysqli-> error);

?> 

<!-- CODIGO DA PARTE DE RESOLVER PROVAS -->

<div class="content">
    <div class="card">
        <h5 class="card-header">Resolver prova</h5>
        <div class="card-body">
        
        <div class="input-group flex-nowrap">
            <span class="input-group-text">Aluno</span>
            <input type="text" class="form-control" placeholder="Nome completo" name="aluno" required>
        </div>

        <?php while($pergunta = $sql_query -> fetch_array()){ ?>

            <div class="card mt-3">
                <h5 class="card-header"><?php echo $pergunta['materia']; ?></h5>
                <div class="card-body">
                   <h5 class="card-title"><?php echo $pergunta['pergunta']; ?></h5>

                    <div class="input-group mt-2">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" name="name<?php echo $pergunta['id']; ?>" value="<?php echo $pergunta['a']; ?>" >
                        </div>
                        <input type="text" class="form-control" value="<?php echo $pergunta['a']; ?>" disabled>
                    </div>

                    <div class="input-group mt-2">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" name="name<?php echo $pergunta['id']; ?>" value="<?php echo $pergunta['b']; ?>">
                        </div>
                        <input type="text" class="form-control" value="<?php echo $pergunta['b']; ?>" disabled>
                    </div>

                    <div class="input-group mt-2">      
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" name="name<?php echo $pergunta['id']; ?>" value="<?php echo $pergunta['c']; ?>">
                        </div>
                        <input type="text" class="form-control" value="<?php echo $pergunta['c']; ?>" disabled>
                    </div>
                    
                    <div class="input-group mt-2">      
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" name="name<?php echo $pergunta['id']; ?>" value="<?php echo $pergunta['d']; ?>">
                        </div>
                        <input type="text" class="form-control" value="<?php echo $pergunta['d']; ?>" disabled>
                    </div>
                    
                    <div class="input-group mt-2">      
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" name="name<?php echo $pergunta['id']; ?>" value="<?php echo $pergunta['e']; ?>">
                        </div>
                        <input type="text" class="form-control" value="<?php echo $pergunta['e']; ?>" disabled>
                    </div>

                </div>
            </div>
           
            <?php } ?>

           <button type="submit" class="btn btn-success btn-sm mt-2">Finalizar</button>

        </div>  
    </div>
</div> 

</form>
</body>
</html>