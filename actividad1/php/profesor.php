<?php
class Persona {
    public $nombre;
    public function saludar() {
        return "Hola, soy $this->nombre";
    }
}

class Profesor extends Persona {
    public $materia;
    public function presentarse() {
        return $this->saludar() . " y enseño $this->materia.";
    }
}
