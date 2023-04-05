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

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal">
    
        <a class="pure-menu-heading" href="">Conhecimento na mão</a>
        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="./usuarioProfe.php" class="pure-menu-link">Voltar</a></li>
        </ul>
    </div>
</div>

<!--
    <ul class="pure-menu-list">
        <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item"><a href="../config/logout.php" class="pure-menu-link">Sair</a></li>
    
    </ul>

-->
 
    <div class="content">
    <div class="card">
    <h5 class="card-header">Prova</h5>
    <div class="card-body">
     
    <!--Pergunta da questão -->
    <form action="salvarProva.php" method="POST">
    <div class="form-floating mt-1"><input type="text" class="form-control" id="floatingInput" name="materia" placeholder="Disciplina">
    <label for="floatingInput">Disciplina</label> 
    </div>
    <div class="form-floating mt-3">
    <textarea class="form-control" placeholder="Escreva a pergunta da questão aqui" id="floatingTextarea" name="pergunta" required></textarea>
    <label for="floatingTextarea">Pergunta</label>
    </div>

    <div class="card mt-3">
    <h5 class="card-header">Respostas</h5>
    <div class="card-body">
    
    <div class="form-floating mt-1"><input type="text" class="form-control" id="floatingInput" name="respostaA" placeholder="resposta A" required>
    <label for="floatingInput">Resposta A</label> 
    </div>

    <div class="form-floating mt-1"><input type="text" class="form-control" id="floatingInput" name="respostaB" placeholder="resposta B" required>
    <label for="floatingInput">Resposta B</label> 
    </div>

    <div class="form-floating mt-1"><input type="text" class="form-control" id="floatingInput" name="respostaC" placeholder="resposta C" required>
    <label for="floatingInput">Resposta C</label> 
    </div>

    <div class="form-floating mt-1"><input type="text" class="form-control" id="floatingInput" name="respostaD" placeholder="resposta D" required>
    <label for="floatingInput">Resposta D</label> 
    </div>

    <div class="form-floating mt-1"><input type="text" class="form-control" id="floatingInput" name="respostaE" placeholder="resposta E" required>
    <label for="floatingInput">Resposta E</label> 
    </div>

    <!--Codigo de adicionar
    <div id="formulario">
    <div class="form-group">
    
    <button type="button" class="btn btn-primary btn-sm" id="add-campo">Adicinar alternativas</button>
    
    -->
    
    </div>
    </div>
    
    <div class="form-floating mt-3"><input type="text" class="form-control" id="floatingInput" name="correta" placeholder="correta" required>
    <label for="floatingInput">Resposta Correta</label> 
    </div>

    <div class="form-group">
    <button type="submit" name="button" class="btn btn-primary mt-3">Salvar</button>
    </div>
   
    </div>
    </div>
    </div>
    
</body>
</html>