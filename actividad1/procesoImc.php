<?php
    include 'php/funciones.php';
    include 'php/imc.php';

    $campos = CamposNulos($_POST);
    if(count($campos)==0){
        $imc = new Imc();
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $imc->setAltura($altura);
        $imc->setPeso($peso);
        echo $imc->presentar();
        echo "El imc es:". $imc->calImc();
    }else{
        $cadena = "";
        foreach($campos as $c){
            $cadena.= $c." ";
        }        
        echo "Campos nulos, faltan los siguientes campos: ".$cadena;
    }
    
