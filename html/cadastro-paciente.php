<?php require_once 'php/db.logon.php'; ?>
<!DOCTYPE <!DOCTYPE html>
<html lang="pt">
  <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="..\css\bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
     <script src="..\js\bootstrap.min.js"></script>
     <link rel="stylesheet" href="..\css\style.css">
     <link rel="icon" type="image/ico" href="..\img\ico_hnsd.ico">
     <title>Paciente</title>
     <script src="..\js\jquery.mask.min.js"></script>
     <script src="..\js\jquery.effectsPage.js"></script>
  </head>
  <body>

    <div class="container pagination-centereds w-75 mt-5">
        <div class="row align-items-start">
            <div class="col">
                <img src="..\img\logo_hnsd.png" class ="img-responsive float-left d-inline" alt="logo">
            </div>
            <div class="col">
                <h4 class="float-left d-inline" style="margin-top: 2rem;">Paciente</h4>
            </div>
            <div class="col-md-auto text-right">
                <div class="btn-group-vertical">
                    <button id="resetBtn" type="button" class="btn btn-link text-right" title="Clique aqui, para limpar os campos">Reset</button>
                    <a href="..\busca" class="btn btn-link text-right" title="Clique aqui, para voltar a tela inicial">Cancelar</a>
                </div>
            </div>
        </div>
        <hr>
        <br>

        <?php session_start(); $varcpf = $_SESSION['form_cpf']; ?>

        <form action="../php/db.input.php" method="POST">
            <div class="row">
                <div class="w-100 form-group px-3">
                    <label for="nomePaciente">Nome do <span class="font-weight-bold">Paciente*</span></label>
                    <input  required="required" 
                            pattern="[a-zA-Z\s]{4,40}" 
                            type="text" 
                            class="form-control" 
                            maxlength="40" 
                            placeholder="Nome completo do paciente, apenas letras"
                            id="nomePaciente"  
                            name="nomePaciente">
                </div>
            </div>
            
            <div class="row necessarioResponsavel">
                <div class="w-100 form-group px-3">
                    <label for="nomeResponsavel">Nome do <span class="font-weight-bold">Responsável*</span></label>
                    <input  pattern="[a-zA-Z\s]{2,40}"
                            type="text" 
                            class="form-control" 
                            id="nomeResponsavel"  
                            name="nomeResponsavel"
                            maxlength="40" 
                            placeholder="Nome completo do responsável pelo paciente (menor de idade), apenas letras" 
                            id="nomeResponsavel"  
                            name="nomeResponsavel">
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input  type="text" 
                                class="form-control" 
                                maxlength="20" 
                                placeholder="Telefone com o DDD, apenas números"
                                id="telefone" 
                                name="telefone">
                        
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="pwd">Estado civil</label>
                    <select class="form-control selectBorder" 
                            id="estadoCivil" 
                            name="estadoCivil">
                        <option value="1" selected="selected">Solteiro(a)</option>
                        <option value="2">Casado(a)</option>
                        <option value="3">Divorciado(a)</option>
                        <option value="4">Viúvo(a)</option>
                        <option value="5">Não declarado</option>
                    </select>
                </div>

                <div class="col-md-5 desnecessarioResponsavel">
                    <div class="form-group">
                        <label for="paciente-profissao">Profissão</label>
                        <input  pattern="[a-zA-Z\s]{,16}"
                                type="text" 
                                class="form-control" 
                                maxlength="16" 
                                placeholder="Profissão, apenas letras"
                                id="pacienteProfissao" 
                                name="pacienteProfissao">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="cpfPaciente">CPF do <span class="paciente font-weight-bold">Paciente*</span></label>
                        <input  required="required"
                                type="text" 
                                required="required" 
                                class="form-control" 
                                maxlength="16" 
                                placeholder="CPF, apenas números"
                                value= <?php echo $varcpf; ?> 
                                id="cpfPaciente" 
                                name="cpfPaciente">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="plano">Plano de saúde</label>
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

                <div class="col-md-5" id="hideNumeroPlano">
                    <div class="form-group">
                        <label for="numero-plano">Número Plano</label>
                        <input  type="text" 
                                pattern="0-9]{,10}"
                                class="form-control" 
                                maxlength="16" 
                                placeholder="Numeração no plano, apenas números"
                                id="numeroPlano"
                                name="numeroPlano">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="cadastro-sus">Cadastro do <span class="font-italic">SUS</span><span class="font-weight-bold">*</span></label>
                        <input  type="text" 
                                required="required" 
                                class="form-control" 
                                maxlength="16" 
                                placeholder="Cadastro do SUS, apenas números"
                                id="cadastroSus" 
                                name="cadastroSus">
                    </div>
                </div>
                
                <div class="col-md-auto">
                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                        <input  type="checkbox" 
                                class="custom-control-input"
                                id="menorIdade"
                                name="menorIdade">
                        <label class="custom-control-label" for="menorIdade">Menor de idade</label>
                    </div>
                </div>
            </div>

            <div class="btn-group float-right">
                <div class="text-left">
                    <button id="logout" type="button" class="btn btn-link" title="Para desconectar do sistema, clique aqui">Sair</button>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn">Salvar</button>
                </div><br><br>
            </div>
        </form>

        <h6>Campos com <span class="font-weight-bold">*</span>, são de preenchimento obrigatório</h6>
    

    </div>
  </body>
</html>