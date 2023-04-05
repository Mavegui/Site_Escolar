<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logando</title>
    
    <!-- CDN's -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php

include('../bd/conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];
$cargo = $_POST['cargo'];

$sql_code = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
$sql_exec = $mysqli -> query($sql_code) or die($mysqli -> error);

$usuario = $sql_exec->fetch_assoc();


if (password_verify($senha, $usuario['senha'])) {
  
  if(!isset($_SESSION)) {
    session_start();
  }
  $_SESSION['id'] = $usuario['id'];
  $_SESSION['nome'] = $usuario['nome'];

  if($cargo == 1){  


    header("location: ../user/pagAluno/usuarioAluno.php");
    
    } else {
    
    header("location: ../user/pagProf/usuarioProfe.php");
     
    }

}else{

?>  

<div class="position-absolute top-50 start-50 translate-middle">
<div class="card text-center text-white bg-danger mb-3">
<div class="card-body">
     
<h5 class="card-title">ERROR no login!!!</h5>
<p class="card-text">Email ou senha estão incorretos.</p>
<a href="../login.php" class="btn btn-light">Login</a>
     
</div>
</div>
</div>

<?php
}
/*if (!isset($_SESSION)) {
  
session_start();

} 

$_SESSION['id'] = $usuario['id'];
$_SESSION['nome'] = $usuario['nome'];
*/
/*if($cargo == 1){
    
header("location: ../user/pagAluno/usuarioAluno.php");

} else {

header("location: ../user/pagProf/usuarioProfe.php");
 
}
 
}else{ 
?> 
 
<div class="position-absolute top-50 start-50 translate-middle">
<div class="card text-center text-white bg-danger mb-3">
<div class="card-body">
     
<h5 class="card-title">ERROR no login!!!</h5>
<p class="card-text">Email ou senha estão incorretos.</p>
<a href="../login.php" class="btn btn-light">Login</a>
     
</div>
</div>
</div>
  
<?php

}
*/
?>

</body>
</html>