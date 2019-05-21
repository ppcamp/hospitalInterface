<?php
    require_once 'db.conn.php';
    session_start();

    $form_medico      = $_POST['medicoResponsavel'];                                 //1
    $form_plano       = $_POST['plano'];                              //1
    $form_sintomas    = $_POST['sintomas'];
    $form_tratamento  = $_POST['tratamento'];
    $form_cpf         = $_SESSION['form_cpf'];
    $form_nome        = $_SESSION['form_nome'];


    $command = "INSERT INTO consulta(medico,cpf,plano_consulta,sintomas,tratamento";
    $values = "VALUES('" 
                        .$form_medico ."','" 
                        .$form_cpf ."','" 
                        .$form_plano ."','" 
                        .$form_sintomas ."','"
                        .$form_tratamento ."'";
                        
    $query = $command .") ". $values .");";
    pg_query($conn, $query);
    header("Location: http://localhost/busca");
    
    $conn->close();
?>