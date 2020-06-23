<?php 
// Getting values from database
require_once  'db.conn.php';

$query  = "SELECT * FROM pessoa WHERE cpf=" . $_POST["ty"];
$result = pg_query($conn,$query);
$row    = pg_fetch_assoc($result);

// Passing cpf value to other pages
session_start();
$_SESSION['form_cpf'] = $_POST["ty"];

// Checking if find someone with this cpf numbers
if (empty($row)){
    echo '<div class="alert alert-danger"> Não foi possível encontrar ninguém com esse número</div>';
}
else{
   echo'
    <div class="row" id="search">
        <div class="col pb-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col text-center">
                            <h5>Visualização dos dados</h5>
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Nome do Paciente
                        </div>
                        <div name="n" class="col-md-auto text-muted ">' 
                        . $row['nome'].'
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Cadastro SUS
                        </div>
                        <div class="col-md-auto text-muted ">'
                        . $row['numeracao_sus']. '
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Estado Civil
                        </div>
                        <div class="col-md-auto text-muted ">'
                        . $row['estado_civil']. '
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Profissão
                        </div>
                        <div class="col-md-auto text-muted ">'
                        . $row['profissao'].'
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        Número do Plano
                        </div>
                        <div class="col-md-auto text-muted ">'
                        . $row['numero_plano']. '
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Menor de idade
                        </div>
                        <div class="col-md-auto text-muted">'
                        . $row['menor']. '
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="btn-group float-right pt-2">
                <button type="button" 
                        onclick="teste()"
                        class="btn" 
                        name="confirmar" 
                        id="cc">Confirmar paciente</button>
            </div>
        </div>
    </div>';
    
    $_SESSION['form_nome'] = $row['nome'];
    $_SESSION['form_plano'] = $row['numero_plano'];
}?>