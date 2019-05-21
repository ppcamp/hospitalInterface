<?php
    require_once 'db.logon.php';
    require_once 'db.conn.php';

    $form_name = $_POST["nome-usuario"]; 
    $form_pwd  = $_POST['senha'];
    echo '<div class="alert alert-success" role="alert">
    Conexão com o PostgreSQL realizada com sucesso!
 </div>';
 /*
    if($conn) {
       echo '<div class="alert alert-success" role="alert">
                Conexão com o PostgreSQL realizada com sucesso!
             </div>';
       $sql = "INSERT INTO login (nickname, password) VALUES('"
                .$form_name. "','" 
                .$form_pwd "')";
       pg_query($conn, $sql);
       echo '<div class="alert alert-success" role="alert">
                Usuário criado com sucesso!
             </div>';
       pg_close($conn);
   }
   else {
        echo '<div class="alert alert-danger" role="alert">
            Erro na conexão com PostgreeSQL.
        </div>';
   }*/
   session_stop();
   $conn->close()
?>