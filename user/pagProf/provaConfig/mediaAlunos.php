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
<form> 

<!-- Menu -->
   
    <div class="header">
       <div class="home-menu pure-menu pure-menu-horizontal">
           <a class="pure-menu-heading" href="">Conhecimento na mão</a>
           <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="../usuarioProfe.php" class="pure-menu-link">Voltar</a></li>
           </ul>
        </div>
    </div>

 <?php

    $sql= "SELECT * FROM notas";
    $sql_query= $mysqli-> query($sql) or die($mysqli ->error);  
    $contagem= $sql_query -> num_rows;
    if($contagem == 0){

    
?>

<div class="alert alert-danger" role="alert">Nenhuma nota existente!</div>

<?php

}else{

?>

<div class="content">
    <div class="card">
        <h5 class="card-header">Notas alunos</h5>
        <div class="card-body">
    
            <div class="card">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Aluno</th>
                            <th scope="col">Média 1</th>
                            <th scope="col">Média 2</th>
                            <th scope="col">Média 3</th>
                            <th scope="col">Média 4</th>
                            <th scope="col">Média final</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($nota = $sql_query-> fetch_array()){  ?>
                        <tr>
                            <th scope="row"></th>
                            <td><?php echo $nota['nome']; ?></td>
                            <td><?php echo $nota['nota1']; ?></td>
                            <td><?php echo $nota['nota2']; ?></td>
                            <td><?php echo $nota['nota3']; ?></td>
                            <td><?php echo $nota['nota4']; ?></td>
                            <td><?php echo $nota['notafinal']; ?></td>
                         </tr>
<?php

}
}

?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</form>
</body>
</html>
