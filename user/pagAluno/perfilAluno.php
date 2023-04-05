<?php

include ("../../config/proteger.php");

if(isset($_FILES['imagem'])){

    $imagem = $_FILES['imagem'];
    if($imagem['size'] > 2097152)
        die("Imagem muito grande! Limite 2MB");
        //var_dump($_FILES['imagem']);

    $pasta = "upload/";
    $nomeIMG = $imagem['name'];
    $newName = uniqid();

    // STRTOLOWER = " Serve para transformar todas letras em minúscula ";
    // PATHINFO = " Usado para saber extensão da imagem ";
    $extensao =  strtolower(pathinfo($nomeIMG, PATHINFO_EXTENSION));

   if($extensao != "jpg" && $extensao != "png")   
   die("Tipo de arquivo não aceito");
   
   $sucesso = move_uploaded_file($imagem['tmp_name'], $pasta . $newName . "." . $extensao);
   if($sucesso)
      echo  "<p> Arquivo enviado com sucesso! link do arquivo: <a target=\"_blank\" href=\"upload/$newName.$extensao\">link</a></p>";

}

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
<form method = "POST" enctype = "multipart/form-data">

    <div class="header">
        <div class="home-menu pure-menu pure-menu-horizontal">
            <a class="pure-menu-heading" href="">Conhecimento na mão</a>
    
            <ul class="pure-menu-list">
                <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="../../config/logout.php" class="pure-menu-link">Sair</a></li>
            </ul>
        </div>
    </div>

    <!-- CONFIG DO PERFIL USER -->

    <div class="content">
        <div class="card">
            <h5 class="card-header">Configure seu perfil</h5>
            <div class="card-body">
            <h5 class="card-title">Insira sua foto</h5>
                <div class="mb-3">
                    <input class="form-control form-control-sm mt-2" id="formFileSm" type="file" name = "imagem">
                </div>
            
                <div class="card">
                    <div class="card-body mb-2">
                        <h5 class="card-title">Informações adicionais</h5>
                        
                       <label for="aluno">Nome completo</label> 
                       <input type="text" name="aluno" class="form-control">

                       <label for="email">Email</label> 
                       <input type="email" name="email" class="form-control">

                       <label for="nomeMae">Nome da mãe</label> 
                       <input type="text" name="nomeMae" class="form-control">

                       <label for="nomePai">Nome do pai</label> 
                       <input type="text" name="nomePai" class="form-control">


                    </div>
                </div>

                <button type = "submit" class = "btn btn-success btn-sm mt-2">Upload</button>
            
            </div>
        </div>
    </div> 
</form>
</body>
</html>