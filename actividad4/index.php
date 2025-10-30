<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        var_dump($_SESSION['usuario']);
    }else{
        header('location:login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Formulario
</body>
</html>