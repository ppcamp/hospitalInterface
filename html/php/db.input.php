<?php
    require_once 'db.conn.php';

    $form_telefone    = $_POST['telefone'];                                 //1
    $form_cpfP        = $_POST['cpfPaciente'];                              //1
        $form_cpfP    = preg_replace('/[^A-Za-z0-9\-]/', '', $form_cpfP);
    $form_plano       = $_POST['plano'];                                    //1
    $form_nPlano      = $_POST['numeroPlano'];                              //1
        if(empty($form_nPlano)) $form_nPlano = 1;
    $form_planoSus    = $_POST['cadastroSus'];                              //1
    $form_menorIdade  = $_POST['menorIdade'];                               //1
        if(empty($form_menorIdade))$form_menorIdade = 0;
        else $form_menorIdade = 1;

    $form_nomeP       = $_POST['nomePaciente'];                             //1
    $form_estadoR     = $_POST['estadoCivil'];                              //1
    $form_profissaoP  = $_POST['pacienteProfissao'];                        //1
    
    $form_nomeR       = $_POST['nomeResponsavel'];                          //1
    $form_parentescoP = $_POST['parentesco'];                               //1
    $form_escolaP     = $_POST['pacienteEscola'];

    $command = "INSERT INTO pessoa(nome,cpf,numeracao_sus,menor";
    $values = "VALUES('" 
                        .$form_nomeP ."','" 
                        .$form_cpfP ."','" 
                        .$form_planoSus ."','" 
                        .$form_menorIdade ."'";

    if(!empty($form_telefone)){
        $command = $command .",telefone";
        $values = $values .",'" .$form_telefone ."'";}
    if(!empty($form_profissaoP)){
        $command = $command .",profissao";
        $values = $values .",'" .$form_profissaoP ."'";}
    if(!empty($form_estadoR)){
        $command = $command .",estado_civil";
        $values = $values .",'" .$form_estadoR ."'";}
    if(!empty($form_nomeR)){
        $command = $command .",nome_responsavel";
        $values = $values .",'" .$form_nomeR ."'";}
    
    $command = $command .",numero_plano";
    $values = $values .",'" .$form_nPlano ."'";
    
    $query = $command .") ". $values .");";
    pg_query($conn, $query);
    header("Location: http://localhost/busca");
    $conn->close();
?>