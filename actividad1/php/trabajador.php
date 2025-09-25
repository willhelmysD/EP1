<?php 
    class Trabajador{
        private $nombre;
        private $apellido;
        private $cargo;
        private $horas;
        public function setNombre($n){
            $this->nombre = $n;
        }
        public function setApellido($a){
            $this->apellido = $a;
        }
        public function setHoras($h){
            $this->horas = $h;
        }
        public function setCargo($c){
            $this->cargo = $c;
        }
        public function presentar(){
            return "los datos son $this->nombre, $this->apellido, $this->horas, $this->cargo<br>";
        }
        public function cargo(){
            $c = $this->cargo;
            if($c==0){
                echo "cargo no valido!!!";
            }else{
                switch($c){
                    case 1:
                        $total = $this->horas * 50;
                        break;
                    case 2:
                        $total = $this->horas * 150;
                        break;
                    case 3:
                        $total = $this->horas * 250;
                        break;
                    default:
                        $total = 0;
                        break;                                                    
                }
                return $total;
            }
        }
    }