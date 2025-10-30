<?php  
 class Cliente{
    private $nombre;
    private $apellido;
    private $telefono;
    private $edad;
    public function __construct($nombre, $apellido, $telefono, $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->edad = $edad;        
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getResumen(){
        return "Usuario: $this->nombre 
        $this->apellido
        $this->edad
        Celular: $this->telefono";
    }
 }
