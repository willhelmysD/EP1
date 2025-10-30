<?php 
session_start();
require_once "plantilla.html";
startblock('article');
if(isset($_SESSION['carrito'])){
    $detalle = unserialize($_SESSION['carrito']);
}else{
    $detalle = [];
}
?>
<h1>Reporte:</h1>
<?php if(empty($detalle)){
    echo "No hay datos!!!";
}else{
    foreach($detalle as $fila){
        var_dump($fila);
    }
}?>
<?php  endblock();?>