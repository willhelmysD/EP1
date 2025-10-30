<?php
    session_start();
    $user  = $_POST['user'];
    $_SESSION['usuario'] = $user;
    header('location:../index.php');
    die;
    //var_dump($_POST);

?>