<?php
class Estudiante {
    private $nombre;
    private $edad;

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function presentar() {
        return "Soy $this->nombre y tengo $this->edad años.";
    }


/*

    public function presentar() {
        return "Soy $this->nombre y tengo $this->edad años.";
    }

    public function getNombre(){
        return $this->nombre;
    }
*/

}
