<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <!-- CDN's do framework's-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
   

</head>
<body>
<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal">
    
    <a class="pure-menu-heading" href="#">Conhecimento na mão</a>
    
    <ul class="pure-menu-list">
    <li class="pure-menu-item"><a href="index.html" class="pure-menu-link">Home</a></li>
    <li class="pure-menu-item"><a href="login.php" class="pure-menu-link">Login</a></li>
    </ul>
    </div>
    </div>

    <div class="content">
    <div class="card">
    <h5 class="card-header">Criando conta</h5>
    <div class="card-body">
    
    <form action="./cod/registrando.php" method="POST">
    
    <div class="form-floating">
    <input type="text" name="nome" class="form-control" id="floatingInput" placeholder="Nome" required>
    <label for="floatingInput">Nome</label>
    </div>

    <div class="form-floating mb-3">
    <input type="email" name="email" class="form-control" id="floatingInputB" placeholder="name@example.com" required>
    <label for="floatingInputB">Email</label>
    </div>

    <div class="form-floating">
    <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Senha">
    <label for="floatingPassword">Senha</label>
    </div>
    
    <div class="form-floating mb-3">
    
    <input type="password" name="confirmarSenha" class="form-control" id="floatingPasswordB" placeholder="Confirmar senha">
    <label for="floatingPasswordB">Confirmar senha</label>
    </div>
    
    <!--
        
    <h6>Marque quem é você na escola</h6>
    <div class="form-check">
    
    <input class="form-check-input" type="radio" name="cargo" value="Aluno">
    <label class="form-check-label" for="aluno">Aluno</label>
    
    </div>
    <div class="form-check mb-3">
    
    <input class="form-check-input" type="radio" name="cargo" value="Professor">
    <label class="form-check-label" for="professor">Professor</label>

    </div>

    <select class="form-select" aria-label="Default select example">
    
    <option selected>Selecione sua turma</option>
    <option value="1">Turma A</option>
    <option value="2">Turma B</option>
    
    </select>
    -->

    <button type="submit" name="button" class="btn btn-primary mt-3">Registrar</button>
    
    </form>
    
    </div>
    </div>
    </div>

    <div class="footer l-box is-center">
    Criado por Gui, usando pure css.
    </div>
</body>
</html>