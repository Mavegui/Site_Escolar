
<?php

include("../../bd/conexao.php");

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
    <link rel="stylesheet" href="../../estilo/style.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">

</head>
<body>


<!-- Menu do site -->
<div class="header">
   <div class="home-menu pure-menu pure-menu-horizontal">
        <a class="pure-menu-heading" href="">Conhecimento na mão</a>
        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="./usuarioProfe.php" class="pure-menu-link">Voltar</a></li>
        </ul>
    </div>
</div>

<form>

<?php

$provaDados = "SELECT * FROM prova";
$con = $mysqli-> query($provaDados) or die ($mysqli-> error);

?>

<div class="content">
    <div class="card">
        <h5 class="card-header">Ver questões existentes</h5> 
        <div class="card-body">
    
            <!-- estrutura de repetição -->
            <?php while($dados = $con-> fetch_array()){ ?>
            <div class="content">
                <div class="card">
    
                    <h5 class="card-header "><?php echo $dados['materia']. " ID: ".$dados['id']; ?></h5>
                
                    <div class="card-body">
                        <div class="card text-dark bg-light mb-3">
                            <div class="card-body ">
       
                                <h5 class="card-title "><?php echo $dados['pergunta']; ?></h5>
    
                                <p class="card-text">A) <?php echo $dados['a']; ?></p>
                                <p class="card-text">B) <?php echo $dados['b']; ?></p>
                                <p class="card-text">C) <?php echo $dados['c']; ?></p>
                                <p class="card-text">D) <?php echo $dados['d']; ?></p>
                                <p class="card-text">E) <?php echo $dados['e']; ?></p>

                                <h6 class="card-text ">Correta <?php echo $dados['correta']; ?></h6>
                                <a href="./provaConfig/alterar.php?dado=<?php echo $dados['id']; ?>" class="btn btn-success btn-lg mt-2 btn-sm " tabindex="-1" role="button" aria-disabled="true">Alterar</a>
                                <a href="./provaConfig/excluir.php?idExcluir=<?php echo $dados['id']; ?>" class="btn btn-danger btn-lg mt-2 btn-sm " tabindex="-1" role="button" aria-disabled="true">Excluir</a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
           
            <?php  } ?>
        
        </div>
    </div>
</div>

</form>
</body>
</html>