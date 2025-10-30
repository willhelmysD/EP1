<?php  
 class Vehiculo{
    private $tipo;
    private $tarifa;
    public function __construct($tipo, $tarifa){
        $this->tipo = $tipo;
        $this->tarifa = $tarifa;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getTarifa(){
        return $this->tarifa;
    }
    public function resumen(){
        return "Tipo: $this->tipo Tarifa: $this->tarifa";
    }
 }