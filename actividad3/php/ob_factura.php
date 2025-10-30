<?php  
 class Factura{
    private $tipo;
    private $placa;
    private $horas;
    private $usuario;
    private $total;


    public function __construct($tipo, $placa, $hora, $usuario, $total){
        $this->tipo = $tipo;
        $this->placa = $placa;
        $this->horas = $hora;
        $this->usuario = $usuario;
        $this->total = $total;
    }

    public function getTotal(){        
        return $this->total;
    }
    /*
    public function getTipo(){
        return $this->tipo;
    }
    public function getTarifa(){
        return $this->tarifa;
    }*/
    public function resumen(){
        return "Tipo: $this->tipo placa: $this->placa Horas: $this->horas Usuario-> $this->usuario";
    }
 }