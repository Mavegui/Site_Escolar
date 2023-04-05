<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
    <li class="pure-menu-item"><a href="registro.php" class="pure-menu-link">Registre-se</a></li>
    </ul>
    </div>
    </div>
    
    <form action="./cod/logando.php" method="POST">

    <div class="content">
    <div class="card">
    <h5 class="card-header">Login</h5>
    <div class="card-body">
     
    <div class="form-floating mb-3">
    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
    <label for="floatingInput">Email</label>
    </div>
     
    <div class="form-floating mb-3">
    <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Senha</label>
    </div>
     
    <!-- verificar se é aluno ou professor -->
    <div class="card">
    <h5 class="card-header">Selecione quem você é</h5>
    <div class="card-body">
    
    <div class="form-check">
    
    <input class="form-check-input" type="radio" name="cargo" value= "1" required>
    <label class="form-check-label" for="cargo">Aluno</label>
    
    </div>
    <div class="form-check">
    
    <input class="form-check-input" type="radio" name="cargo" value= "2" required>
    <label class="form-check-label" for="cargo">Professor</label>
    
    </div>

    </div>
    </div>
    
    <!-- Button de logar -->
    <button type="submit" name="button" class="btn btn-primary mt-3">Entrar</button>
    
    </form>
    
    </div>
    </div>
     
    <div class="card mt-2">
    <div class="card-body">
    
    <h5 class="card-title">Registre-se</h5>
    <p class="card-text">Ainda sem conta? crie sua conta agora!</p>
    <a href="registro.php" class="btn btn-primary">Registrar</a>
    
    </div>
    </div>

    </div>

    <div class="footer l-box is-center">
    Criado por Gui, usando pure css.
    </div>

</body>
</html>