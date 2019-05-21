<?php
    $server = "localhost";
    $user = "postgres";
    $pwd ="postgres";
    $db = "hnsd";
    
    //Aqui criamos a conexão utilizando o servidor, usuario e senha, caso dê erro, retorna um erro ao usuário.
    $conn = pg_connect("host=localhost 
                       port=5432 
                       dbname={$db} 
                       user={$user} 
                       password={$pwd}"
    ) or die ("Não foi possível conectar ao servidor PostGreSQL");
    //caso a conexão seja efetuada com sucesso, exibe uma mensagem ao usuário
    //echo "Conexão efetuada com sucesso!!";
?>