<?php 

Class Usuarios{

    private $nombre;
    private $apellido;
    private $genero;
    private $nacimiento;
    private $telefono;

    public function setAll($nombre, $apellido, $genero, $nacimiento, $telefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->genero = $genero;
        $this->nacimiento = $nacimiento;
        $this->telefono = $telefono;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function getNacio(){
        return $this->nacimiento;
    }
    public function getTelefono(){
        return $this->telefono;
    }                
    

}