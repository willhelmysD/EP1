<?php
    session_start();

    require 'php/listado.php';
    require 'php/factura.php';
    $class = new Factura();    

    if(isset($_SESSION['carrito'])){
        //var_dump($_SESSION['carrito']);         
        $detalle = unserialize($_SESSION['carrito']);
        //echo count($detalle);
        $total = 0;
        foreach($detalle as $fila){
            
            $subtotal = $fila->getSubtotal();
            $cant = $fila->getCantidad();
            echo "Producto: ".$fila->getCerveza()->getNombre()."<br>";
            echo "Precio unit: ".$fila->getCerveza()->getPrecio()."<br>";
            
            echo "Cantidad: $cant subtotal = $subtotal;<br>";
            $total = $total + $subtotal;            
        }
        echo "El total a pagar es: $total";
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