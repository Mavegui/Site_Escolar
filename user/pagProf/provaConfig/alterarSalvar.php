<?php

include("../../../bd/conexao.php");

$id= $_POST['gui'];
$pergunta= $_POST['pergunta'];
$a= $_POST['a'];
$b= $_POST['b'];
$c= $_POST['c'];
$d= $_POST['d'];
$e= $_POST['e'];
$correta= $_POST['correta'];


$sql=" UPDATE `prova` SET `pergunta`='$pergunta',`a`='$a',`b`='$b',`c`='$c',`d`='$d',`e`='$e',`correta`='$correta' WHERE id='$id'";
$con = $mysqli-> query($sql) or die ($mysqli-> error);

 header("location: ../showPerguntas.php");
?>