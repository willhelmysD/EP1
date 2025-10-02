<?php
session_start();
    require 'php/listado.php';
    require 'php/factura.php';
    
    if(isset($_POST) && !empty($_POST)){
        if(isset($_SESSION['carrito'])){
            $detalle = unserialize($_SESSION['carrito']);
        }else{
            $detalle = [];
        }
        
        if(!empty($_POST['cantidad'])){    
            $factura = new Factura();
            $cantidad = $_POST['cantidad'];       
            $item = $_POST['item'];            
            $factura->setCantidad($cantidad);            
            $factura->setSubtotal($cantidad *  $listado[$item]->getPrecio());
            $factura->setCerveza($listado[$item]);
            $detalle[] = $factura;
            $_SESSION['carrito'] =  serialize($detalle);
            header('location: index.php');
        }        
    }else{

    }