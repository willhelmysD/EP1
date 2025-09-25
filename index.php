<?php
    session_start();

    require 'php/listado.php';
    require 'php/factura.php';    

    if(isset($_SESSION['carrito'])){
        //var_dump($_SESSION['carrito']);
        $detalle = $_SESSION['carrito'];
        echo count($detalle);
        foreach($detalle as $fila){
            var_dump($fila);
        }
    }    
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja</title>
</head>
<body>
    <h1>Caja Registradora:</h1>
    <form method="post" action="proceso.php">
        <label>Cantidad</label>
        <input type="text" name="cantidad">
        <label>Producto</label>
        <select name="item">
            <option>Seleccione</option>
           <?php 
            $cont =0;
            foreach($listado as $item){
                echo "<option value='".$cont."'>".$item->getNombre()."</option>";
                $cont++;
            }           
            ?> 
        </select>
        <button type="submit">Enviar</button>
        <a  type="button" href="vaciar.php">Terminar</button>
    </form>
</body>
</html>