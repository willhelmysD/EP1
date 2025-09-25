<?php
    require 'Cerveza.php';
    
    $cerveza1 = new Cerveza();
    $cerveza2 = new Cerveza();
    $cerveza3 = new Cerveza();
    
    $cerveza1->setNombre("negra");
    $cerveza1->setPrecio(7000);

    $cerveza2->setNombre("roja");
    $cerveza2->setPrecio(6500);

    $cerveza3->setNombre("rubia");
    $cerveza3->setPrecio(6000);

    $listado = [$cerveza1,$cerveza2,$cerveza3];
    
    
    
    
