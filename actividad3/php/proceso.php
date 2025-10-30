<?php
session_start();
require_once 'tarifas.php';
require 'ob_factura.php';
if(isset($_POST) && !empty($_POST)){
    if(isset($_SESSION['carrito'])){
        $detalle = unserialize($_SESSION['carrito']);
    }else{
        $detalle = [];
    }
    if(!empty($_POST['hora']) && $_POST['hora'] >0 ){    
        $hora = $_POST['hora'];
        $placa = $_POST['placa'];            
        $tipo = $_POST['tipo'];                        
        $usuario = $_POST['usuario'];                        
        $subtotal =  $hora * $tarifas[$tipo]->getTarifa();
        switch($usuaroio){
            case 1:
                $descuento =  $subtotal * 0.20;
                break;
            case 2:
                $descuento =  $subtotal * 0.10;
                break;
            default:
                $descuento = 0;
                break;
        }
        $total = $subtotal - $descuento;
        $factura = new Factura($tipo,$placa,$hora,$usuario,$total);
        $detalle[] = $factura;
        $_SESSION['carrito'] =  serialize($detalle);
        header('location: ../index.php');
    }        
}else{
    echo "datos no validos!!!";
}