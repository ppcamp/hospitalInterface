<?php 
    require_once 'php/db.logon.php';
    session_start(); 
    $varcpf = $_SESSION['form_cpf']; 
    $varnome = $_SESSION['form_nome']; 
?>

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

    <!-- MAIN -->
    <div class="container pagination-centereds w-75 mt-5">
        <!-- Logo (header) -->
        <div class="row align-items-start">
            <div class="col">
                <img src="..\img\logo_hnsd.png" class ="img-responsive float-left d-inline" alt="logo">
            </div>
            <div class="col">
                <h4 class="float-left d-inline" style="margin-top: 2rem;">Prontuário</h4>
            </div>
            <div class="col-md-auto text-right">
                <div class="btn-group-vertical">
                    <button id="resetBtn2" type="button" class="btn btn-link text-right" title="Clique aqui, para limpar os campos">Reset</button>
                    <a href="..\busca" class="btn btn-link text-right" title="Clique aqui, para voltar a tela inicial">Cancelar</a>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <!-- !LOGO_HEADER -->

        <!-- FORM -->
        <form action="../php/db.input2.php" method="POST">
            <!-- Nome -->
            <div class="row">
                <div class="col-md-12">
                    <label for="nomePaciente">Nome do <span class="font-weight-bold">Paciente</span></label>
                </div>
                <div class="col form-group px-3">
                    <input  required="required" 
                            pattern="[a-zA-Z\s]{4,40}" 
                            type="text" 
                            class="form-control" 
                            id="nomePaciente"  
                            maxlength="40" 
                            value= <?php echo $varnome; ?>
                            readonly >                                
                </div>
            </div>
            
            <div>
                <!-- PlanoSaude,Medico-->
                <div class="row" >
                    <!-- Plano de saúde (Só vai mostrar SUS e, se ele tiver, o plano cadastrado)-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="plano">Plano de saúde <span class="font-weight-bold">(usado na consulta)*</span></label>
                            <select class="form-control selectBorder" 
                                    id="plano"
                                    name="plano">
                                <option value="1" selected="selected">SUS</option>
                                <option value="2">Unimed</option>
                                <option value="3">IMPSEMG</option>
                                <option value="4">Univida</option>
                            </select>
                        </div>
                    </div>
    
                    <!-- Medico responsavel atendimento -->
                    <div class="col form-group px-3">
                        <label for="medicoResponsavel">Nome do <span class="font-weight-bold">Médico responsável pelo atendimento</span></label>
                        <input  required="required" 
                                pattern="[a-zA-Z\s]{4,40}" 
                                type="text" 
                                class="form-control" 
                                id="medicoResponsavel"  
                                name="medicoResponsavel"  
                                maxlength="40" 
                                placeholder="Pesquise aqui pelo nome do médico">
                    </div>
                </div>
                
                <!-- Sintomas,Diagnostico-->
                <div class="row" >
                    <!-- Sintomas -->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="sintomas">Sintomas relatados pelo paciente*</label>
                            <textarea class="form-control textControl" 
                                    id="sintomas" 
                                    name="sintomas" 
                                    rows="3"></textarea>
                        </div>
                    </div>
    
                    <!-- Diagnostico -->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="tratamento">Tratamento*</label>
                            <textarea   class="form-control textControl" 
                                        id="tratamento" 
                                        name="tratamento" 
                                        rows="3"></textarea>
                        </div>
                    </div>
                     
                </div>
    
               
                <!-- SUBMIT BTN-->
                <div class="btn-group float-right">
                    <div class="text-left">
                        <button id="logout" type="button" class="btn btn-link" title="Para desconectar do sistema, clique aqui">Sair</button>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn">Salvar</button>
                    </div><br><br>
                </div>
            </div>
            

        </form>
        <!-- !FORM -->

        <h6>Campos com <span class="font-weight-bold">*</span>, são de preenchimento obrigatório</h6>
    </div>
    <!-- MAIN -->

  </body>
</html>