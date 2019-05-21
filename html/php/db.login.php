<?php
    require_once 'db.conn.php';

    $form_name = $_POST["nome-usuario"]; 
    $form_pwd  = $_POST['senha'];

    $result = pg_query($conn,"SELECT * FROM login");
    session_start();
    $_SESSION['login'] = false;
    while($row=pg_fetch_assoc($result)){
        echo $row['password'] .'<p>' .$row['nickname'];
        if ($row['password'] == $form_pwd && $row['nickname'] == $form_name){
            $_SESSION['login'] = true;
        }
    };

    if(!$_SESSION['login']){
        header("Location: http://localhost");
    }
    else{
        header("Location: http://localhost/busca.php");
        die();
    }
    $conn->close();
?>