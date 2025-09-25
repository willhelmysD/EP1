<?php
    require 'php/listado.php';
    require 'php/factura.php';
    
    if(isset($_POST)){
        if(!empty($_POST['cantidad'])){
            $factura = new Factura();
            $cantidad = $_POST['cantidad'];       
            $item = $_POST['item'];            
            $factura->setCantidad($cantidad);            
            $factura->setSubtotal($cantidad *  $listado[$item]->getPrecio());
            $factura->setCerveza($listado[$item]);
            var_dump($factura);
        }        
    }else{

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
    <form method="post" action="index.php">
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
        <button type="submit">Terminar</button>
    </form>
</body>
</html>