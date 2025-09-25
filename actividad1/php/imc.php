<?php
class Imc {
    private $peso;
    private $altura;
    public function __construct() {
        $this->peso = 0;
        $this->altura = 0;
    }
    public function setPeso($p){
        $this->peso = $p;
    }
    public function setAltura($a){
        $this->altura = $a;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function presentar() {
        return "Hola, el peso es: $this->peso, y la altura es: $this->altura <br>";
    }
    public function calImc(){
        $imc = $this->peso/($this->altura^2);
        return round($imc,2);
    }

    
}