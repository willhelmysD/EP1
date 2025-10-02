<?php  
 class Cerveza{
    private $producto;
    private $precio;
    public function __construct(){
        $this->producto = "";
        $this->precio = 0;
    }
    public function setNombre($n){
        $this->producto = $n;
    }
    public function setPrecio($p){
        $this->precio = $p;
    }
    public function getNombre(){
        return $this->producto;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function resumen(){
        return "producto: $this->producto precio: $this->precio";
    }
 }