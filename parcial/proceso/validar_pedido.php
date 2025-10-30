<?php
session_start();

require 'ob_pedidos.php';
if(isset($_POST) && !empty($_POST)){
    if(isset($_SESSION['carrito'])){
        $detalle = unserialize($_SESSION['carrito']);
    }else{
        $detalle = [];
    }
    if(!empty($_POST['cantidad']) && $_POST['cantidad'] >0 ){    
        $fecha = $_POST['fecha'];
        $cantidad = $_POST['cantidad'];            
        $tipo = $_POST['tipo'];                        
        $celular = $_POST['celular'];                        
        $direccion = $_POST['direccion'];                        
        
        $pedido = new Factura($fecha,$cantidad,$tipo,$celular,$direccion);

        $detalle[] = $pedido;
        $_SESSION['carrito'] =  serialize($detalle);
        header('location: ../index.php');
    }        
}else{
    echo "datos no validos!!!";
}