<?php
    session_start();
    if($_SESSION['login'])
        header("Location: http://localhost/busca");
?>
<!DOCTYPE <!DOCTYPE html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <!-- jQuery -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="js\bootstrap.min.js"></script>

    <!-- Html style -->
    <link rel="stylesheet" href="css\style.css">
    <!-- Icon -->
    <link rel="icon" type="image/ico" href="img\ico_hnsd.ico">
    <!-- Page name -->
    <title>Login</title>
    
  </head>
  <body>
    <div class="container pagination-centereds w-25 mt-5">
        <div class="row align-items-start">
            <div class="col">
                <img src="img/logo_hnsd.png" class ="img-responsive float-left d-inline" alt="logo">
            </div>
            <div class="col">
                <h4 class="float-right d-inline" style="margin-top: 2rem;">Login</h4>
            </div>
        </div>
        <hr>
        <br>
        
        <form action="php/db.login.php" method="POST" id="loginForm">
            <div class="form-group">
                <label for="nome-usuario">Nome do Usuário*</label>
                <input  required="required" 
                        pattern="[a-zA-Z]{2,10}" 
                        type="text" 
                        class="form-control" 
                        id="nome-usuario"  
                        maxlength="10" 
                        placeholder="Ex.: jose"
                        name="nome-usuario"> 
            </div>
            <div class="form-group">
                <label for="senha">Senha*</label>
                <input  required="required" 
                        pattern="[a-zA-Z]{2,10}" 
                        type="password" 
                        class="form-control" 
                        id="senha" 
                        maxlength="16" 
                        placeholder="Ex.: 123"
                        name="senha">
            </div>
            <br><br>
            <div class="text-center">
                <button type="submit" class="btn text-center">Entrar</button>
            </div><br><br>
            <div class="container text-center">
                <a href="http://www.google.com.br" class="btn btn-link" title="Para esclarecer dúvidas ou verificar sobre alguma modificação no sistema, clique aqui.">Suporte</button>
                <a href="http://www.google.com.br" class="btn btn-link" title="Caso tenha esquecido a senha, clique aqui">Esqueceu a senha?</button>
                <a href="http://www.google.com.br" class="btn btn-link" title="Se o sistema estiver se comportando de maneira inesperada, clique aqui para relatar o problema aos desenvolvedores">Relatar erros</button>
            </div>

        </form>
    </div>

  </body>
</html>