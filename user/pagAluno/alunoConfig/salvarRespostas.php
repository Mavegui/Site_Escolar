<?php

include ("../../../bd/conexao.php");


$idResult = "SELECT * FROM prova";
$id_query = $mysqli-> query($idResult) or die ($mysqli-> error);
$nota = 0;

$nome = $_POST["aluno"]; 

while($row = $id_query -> fetch_array()){

$pergunta = $row['id'];

if(isset($_POST["name".$pergunta])){

    $resposta = $_POST["name".$pergunta];
    
    $correta =  $row['correta'];

    if($resposta == $correta){
      
    $nota++;


       }
   }
}

$inserir = "INSERT INTO notas (`nome`, `nota1`) VALUES ('$nome', '$nota')";
$inserir_query = $mysqli -> query($inserir) or die ($mysqli-> error);

header("location: ../usuarioAluno.php");
?>