<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrando</title>
    
    <!-- CDN's -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php
 
 include('../bd/conexao.php');

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];
 $confirmarsenha = $_POST['confirmarSenha'];

 if($senha == $confirmarsenha){
    
 $passHash = password_hash($senha, PASSWORD_BCRYPT);
 //echo("Nome: ".$nome."<br> Email:".$email."<br>Senha: ".$passHash."<br> Cargo: ".$cargo);
 
 $sql = "INSERT INTO `usuarios`(`nome`, `email`, `senha`) VALUES ('{$nome}','{$email}','{$passHash}')";
 if(mysqli_query($mysqli, $sql)) {
    
 ?> 
 <div class="position-absolute top-50 start-50 translate-middle">
 <div class="card text-white bg-success text-center mb-3">
 <div class="card-body">
 
 <h5 class="card-title">Cadastrado com sucesso!</h5>
 <p class="card-text">Muito bem, agora você agora tem uma conta no nosso site.</p>
 <a href="../login.php" class="btn btn-light">Login</a>
 
 </div>
 </div>
 </div>
 <?php
 
 } else {
    
 ?> 
 
 <div class="position-absolute top-50 start-50 translate-middle">
 <div class="card text-center text-white bg-danger mb-3">
 <div class="card-body">
    
 <h5 class="card-title">ERROR no cadastro!!!</h5>
 <p class="card-text">Ocorreu algum erro no cadastramento do usuário, email existente ou erro na conexão com banco de dados.</p>
 <a href="../registro.php" class="btn btn-light">Registro</a>
    
 </div>
 </div>
 </div>
 
 <?php
 }
 } else{
   
    ?> 
 
    <div class="position-absolute top-50 start-50 translate-middle">
    <div class="card text-center text-white bg-danger mb-3">
    <div class="card-body">
       
    <h5 class="card-title">ERROR no cadastro!!!</h5>
    <p class="card-text">As senhas digitadas não estão iguais.</p>
    <a href="../registro.php" class="btn btn-light">Registro</a>
       
    </div>
    </div>
    </div>
    
    <?php

 }

?>

</body>
</html>