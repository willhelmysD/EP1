<?php 
Class Trabajador{
    private $id;
    private $nombre;
    private $apellido;
    private $cargo;
    private $horas;
    private $ganancia;
    public function getId(){
        return $this->id;
    }

    public function setId($id): self{
        $this->id = $id;
        return $this;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apellido): self
    {
        $this->apellido = $apellido;
        return $this;
    }

    public function getCargo(){
        return $this->cargo;
    }


    public function setCargo($cargo): self
    {
        $this->cargo = $cargo;
        return $this;
    }

    public function getHoras(){
        return $this->horas;
    }

    public function setHoras($horas): self
    {
        $this->horas = $horas;
        return $this;
    }

    public function getGanancia(){
        return $this->ganancia;
    }

    public function setGanancia($ganancia): self
    {
        $this->ganancia = $ganancia;
        return $this;
    }
}