<?php
    session_start();
    include '../php/usuarios.php';
    if (isset($_POST) && !empty($_POST)) {
        $user = $_POST['nick'];
        $cel  = $_POST['cel'];
        $cont_usuario = 0;
        $cont_cel = 0;
        if(!empty($user) && !empty($cel)) {
            foreach($users as $fila){
                if($fila->getNick()==$user){
                    $cont_usuario = 1;
                    if($fila->getCel()==$cel){
                        $cont_cel = 1;
                    }
                }
            }
            if($cont_cel==1 && $cont_usuario==1){
                $_SESSION['usuario'] = $user;
                header('location:../index.php');
                die;
            }else{
                echo "usuario no valido";
            }
        } else {
            echo "Todos los campos son obligatorios.";
        }

    } else {
        echo "No se enviaron datos por POST.";
    }