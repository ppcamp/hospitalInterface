<?php
    session_start();
    $_SESSION=array(); // empty session data
    session_unset(); 
    session_destroy();
    header("location:/"); //to redirect back to "index.php" after logging out
    echo 'Session was destroyed';
    exit();
?>
