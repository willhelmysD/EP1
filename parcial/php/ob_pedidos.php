<?php
class Pedidos {
    private $fecha;
    private $cantidad;
    private $tipo;
    private $total;
    private $cel;
    private $direccion;

    public function __construct($f, $c, $t, $tt, $cc, $d){
        $this->fecha = $f;
        $this->cantidad = $c;
        $this->tipo = $t;
        $this->cel = $c;        
        $this->direccion = $d;
    }    

    public function setFecha($f){
        $this->fecha = $f;
    }

    public function setCantidad($c){
        $this->cantidad = $c;
    }

    public function setTipo($t){
        $this->tipo = $t;
    }    

    public function setTotal($t){
        $this->total = $t;
    }

    public function setCel($c){
        $this->cel = $c;
    }

    public function setDireccion($d){
        $this->direccion = $d;
    }

    public function resumen(){
        return "$this->fecha, $this->cantidad, $this->tipo, $this->total, $this->cel, $this->direccion";
    }
}
