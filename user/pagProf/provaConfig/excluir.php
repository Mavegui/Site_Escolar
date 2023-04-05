<?php 

include("../../../bd/conexao.php");

if(!isset($_GET['idExcluir'])){

?> 

<div class="alert alert-danger" role="alert">ERROR!</div> 

<?php

}else{

    $idExcluir= $mysqli->real_escape_string($_GET['idExcluir']);

    $sql= "DELETE FROM `prova` WHERE id='$idExcluir'";
    $sql_query= $mysqli-> query($sql) or die($mysqli ->error);

    header("location: ../showPerguntas.php");
}

?>