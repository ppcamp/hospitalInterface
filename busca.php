<?php require_once 'php/db.logon.php'; ?>
<!DOCTYPE <!DOCTYPE html>
<html lang="pt">
  <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="..\css\bootstrap.min.css">
     <!-- jQuery -->
     <script
     src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
     <!-- Bootstrap JS -->
     <script src="..\js\bootstrap.min.js"></script>
 
     <!-- Html style -->
     <link rel="stylesheet" href="..\css\style.css">
     <!-- Icon -->
     <link rel="icon" type="image/ico" href="..\img\ico_hnsd.ico">
     <!-- Page name -->
     <title>Prontuário</title>
     

     <script src="..\js\jquery.mask.min.js"></script>
     <!-- Funcs to buttons -->
     <script src="..\js\jquery.effectsPage.js"></script>
  </head>
  

  <body>

    <div class="container pagination-centereds w-75 mt-5">
        <div class="row align-items-start">
            <div class="col">
                <img src="..\img\logo_hnsd.png" class ="img-responsive float-left d-inline" alt="logo">
            </div>
            <div class="col">
                <h4 class="float-left d-inline" style="margin-top: 2rem;">Prontuário</h4>
            </div>
            <div class="col-md-auto text-right">
                <div class="btn-group-vertical">
                    <button id="resetBtn" type="button" class="btn btn-link text-right" title="Clique aqui, para limpar os campos">Reset</button>
                    <button id="logout" type="button" class="btn btn-link" title="Para desconectar do sistema, clique aqui">Sair</button>
                </div>
            </div>
        </div>
        <hr>
        <br>
        
        
        <script>
            function aa(){
                var n = "ty=" + $("#cpf").val();
                xhttp.open("POST", "../php/db.search.php", true);
                xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xhttp.send(n);
            };
        </script>

        <form action="javascript:aa()" method="POST">
            <div class="row">
                <div class="col-md-12">
                    <label for="nomePaciente">CPF do <span class="font-weight-bold">Paciente</span></label>
                </div>
                <div class="col form-group px-3">
                    <input  required="required" 
                            pattern="[0-9]{1,11}" 
                            type="text" 
                            class="form-control" 
                            id="cpf"  
                            maxlength="40" 
                            placeholder="Pesquise aqui pelo CPF do paciente"
                            name="cpf">
                </div>
                <div class="col-md-2 form-group">
                    <div class="text-right py-auto">
                        <button type="button" class="btn" name="editarAdd" id="editarAdd">Editar/Add</button>
                    </div>
                </div>
            </div>
            
            <script type="text/javascript">
                function teste() {
                    window.location.href = "../cadastro-prontuario";
                };
            </script>
            
            <div id="dataView"></div>
           
            <script>
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("dataView").innerHTML = this.responseText;
                    }
                };
            </script>

            
        </form>

        <h6>Campos com <span class="font-weight-bold">*</span>, são de preenchimento obrigatório</h6>
    </div>
  </body>
</html>