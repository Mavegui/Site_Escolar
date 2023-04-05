<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvando perguntas</title>
    
    <!-- CDN's -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php
 
 include('../../bd/conexao.php');

 $materia= $_POST['materia'];
 $pergunta= $_POST['pergunta'];
 $a= $_POST['respostaA'];
 $b= $_POST['respostaB'];
 $c= $_POST['respostaC'];
 $d= $_POST['respostaD'];
 $e= $_POST['respostaE'];
 $correta= $_POST['correta'];

 $sql = "INSERT INTO `prova`(`materia`, `pergunta`, `a`, `b`, `c`, `d`, `e`, `correta`) VALUES ('$materia','$pergunta','$a','$b','$c','$d','$e','$correta')";
 if(mysqli_query($mysqli, $sql)) {
   
 
 ?> 
 <div class="position-absolute top-50 start-50 translate-middle">
 <div class="card text-white bg-success text-center mb-3">
 <div class="card-body">
    
 <h5 class="card-title">Questão adicionada com sucesso!</h5>
    <p class="card-text">Adicionar mais questões</p>
    <a href="criarProva.php" class="btn btn-light">Voltar</a>
    
    </div>
    </div>
    </div>
    <?php
    
    } else {
       
    ?> 
    
 <div class="position-absolute top-50 start-50 translate-middle">
 <div class="card text-center text-white bg-danger mb-3">
 <div class="card-body">
       
 <h5 class="card-title">ERROR no salvamento!!!</h5>
 <p class="card-text">Ocorreu algum erro no salvamento da pergunta, tente novamente.</p>
 <a href="criarProva.php" class="btn btn-light">Tentar novamente</a>
       
 </div>
 </div>
 </div>
    
 <?php
 }
 ?>

</body>
</html>