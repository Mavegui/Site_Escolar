<?php

include("../../../bd/conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Prova</title>

    <!-- CDN's do framework's-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../estilo/style.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">

</head>
<body>
<form action="./alterarSalvar.php" method="POST"> 

<!-- Menu -->
   
    <div class="header">
     <div class="home-menu pure-menu pure-menu-horizontal">
       <a class="pure-menu-heading" href="">Conhecimento na mão</a>
     </div>
    </div>

<!-- Codigo PHP de pesquisa no bd -->
 <!--
    <div class="content">

        <div class="card mb-3">
            <div class="card-body">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="id" placeholder="Pesquise o Id da questão para alterar" aria-label="Pesquise o Id da questão para alterar" aria-describedby="button-addon2">
                  <button class="btn btn-outline-success" type="submit" id="button-addon2">Pesquisar</button>
                </div>
            </div>
        </div>    
-->   
        <?php
 
        if(!isset($_GET['dado'])){

        ?>

        <div class="alert alert-danger" role="alert">ERROR!</div>
    
        <?php

        }else{

        $dado= $mysqli->real_escape_string($_GET['dado']);

        $sql= "SELECT * FROM prova WHERE id LIKE '%$dado%'";
        $sql_query= $mysqli-> query($sql) or die($mysqli ->error);

        ?>
     
       <div class="card">
          <h5 class="card-header">Alterar questão</h5>
          <div class="card-body">
    
          <?php while($dados = $sql_query-> fetch_array()){ ?>
          
            <div class="card">
                <h5 class="card-header "><?php echo $dados['materia']; ?></h5>
                <div class="card-body">
                    <div class="card text-dark bg-light mb-3">
                        <div class="card-body">
                           
                           <?php $gui=$dados['id']; ?>
                           <label for="titulo">ID</label>
                           <input type="text" name="gui" class="form-control mt-2" value="<?php echo $gui ?>" >
                       
                           <label for="titulo">Pergunta</label>
                           <textarea name="pergunta" class="form-control mt-2"><?php echo $dados['pergunta']; ?></textarea>

                           <label for="titulo">Alternativa A</label>
                           <input type="text" name="a" class="form-control mt-2" value="<?php echo $dados['a']; ?>">

                           <label for="titulo">Alternativa B</label>
                           <input type="text" name="b" class="form-control mt-2" value="<?php echo $dados['b']; ?>">

                           <label for="titulo">Alternativa C</label>
                           <input type="text" name="c" class="form-control mt-2" value="<?php echo $dados['c']; ?>">

                           <label for="titulo">Alternativa D</label>
                           <input type="text" name="d" class="form-control mt-2" value="<?php echo $dados['d']; ?>">

                           <label for="titulo">Alternativa E</label>
                           <input type="text" name="e" class="form-control mt-2" value="<?php echo $dados['e']; ?>">

                           <label for="titulo">Alternativa correta</label>
                           <input type="text" name="correta" class="form-control mt-2" value="<?php echo $dados['correta']; ?>">
                            
                           <button type="submit" class="btn btn-success btn-sm mt-2">Alterar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

<?php

}

}

?>

</form>
</body>
</html>
