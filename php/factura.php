<?php
    class Factura{
        private $subtotal;
        private $cantidad;
        private $cerveza;

        public function __construct(){
            $this->subtotal = 0;
            $this->cantidad = 0;
            $this->cerveza =  null;
        }

        public function setSubtotal($s){
            $this->subtotal = $s;
        }

        public function setCantidad($c){
            $this->cantidad = $c;
        }

        public function setCerveza($c){
            $this->cerveza = $c;
        }
    }