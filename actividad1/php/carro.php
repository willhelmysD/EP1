<?php
class Carro{
    private $placa;
    private $tipo;
    private $km_inicio;
    private $km_final;
    private $cel;

    public function __construct(){
        $this->placa = "";
        $this->km_inicio = 0;
        $this->km_final= 0;
        $this->tipo = 0;
        $this->cel = "";
    }

    public function setPlaca($p){
        $this->placa = $p;
    }
    public function setKmInicio($i){
        $this->km_inicio = $i;
    }
    public function setKmFinal($f){
        $this->km_final = $f;
    }    
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function setCel($c){
        $this->cel = $c;
    }

    public function nombreTipo($t){
        $rta = match($t){
            1=> "gas",
            2=> "gasolina",
            3=> "ACP",
            default => "Nada",
        };
        return $rta;
    }

    public function traerDatos(){
        $tt = $this->nombreTipo($this->tipo);
        return "$this->placa, $this->cel, $this->km_inicio, $this->km_final $this->tipo, $tt";
    }

    public function  calKM(){
        $inicio = $this->km_inicio;
        $final = $this->km_final;
        $total = $final - $inicio;
        return $total;
    }

    public function cobrar(){
        $km = $this->calKM();
        $tipo = $this->tipo;
        $rta = match($tipo){
            1=> 30000 * $km,
            2=> 50000 * $km,
            3=> 150000 * $km,
            default => 0 ,
        };
        return $rta;
    }

}