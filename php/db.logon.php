<?php
session_start();
if(!$_SESSION['login']){
    header("Location: http://localhost");}
?>