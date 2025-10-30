<?php
    include 'usuarios.php';
    var_dump($users);
    session_start();
    $user  = $_POST['user'];
    $cel  = $_POST['cel'];

    foreach($users as $fila){
        if($fila->getNick()==$user){
            if($fila->getCel()==$cel){
                echo "valido!";
            }
        }
    }

    
/*
    $_SESSION['usuario'] = $user;
    header('location:../index.php');
    die;*/
    //var_dump($_POST);*/

