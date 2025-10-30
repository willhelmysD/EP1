<?php
require_once "controller/base.controller.php"; // Clase padre de los controladores
require_once "model/conexion.php"; // Se carga primero la conexión
session_start();
$url = isset($_GET['url']) ? strtolower($_GET['url']) : 'index';
if(!isset($_SESSION['usuario']) && $url != 'index'){
    header("Location: index.php");
    exit;
}

if($url == 'index' && !isset($_GET['accion'])){
    require_once "controller/index.controller.php";
    $controller = new IndexController();
    call_user_func(array($controller,'Inicio'));
}else{
    $url = $_GET['url'];
    $ruta = "controller/$url.controller.php";
    if(file_exists($ruta)){
        require_once $ruta;
        $controlador = ucwords($url)."Controller";
        $controller = new $controlador;
        $accion = isset($_GET['accion']) ? $_GET['accion'] : "inicio";
        if(method_exists($controller, $accion)) {
            call_user_func(array($controller,$accion));
        }else{
            echo "Acción no encontrada.";
            //require_once "view/error404.php";
        }       
    }else{
        echo "ruta no existe";
        //require_once "view/error404.php";
    }
}

/*




$url = isset($_GET['url']) ? strtolower($_GET['url']) : 'index';
$accion = isset($_GET['accion']) ? strtolower($_GET['accion']) : 'inicio';



$ruta = "controller/{$url}.controller.php";

if (file_exists($ruta)) {
    require_once $ruta;

    $nombreClase = ucfirst($url) . "Controler";

    if(class_exists($nombreClase)) {
        $controlador = new $nombreClase();
        if (method_exists($controlador, $accion)) {
            call_user_func([$controlador, $accion]);
        } else {
            echo "La acción '{$accion}' no existe en el controlador {$nombreClase}.";
        }
    } else {
        echo "La clase {$nombreClase} no está definida en el archivo.";
    }
} else {
    echo "El archivo de controlador '{$ruta}' no existe.";
}
    */