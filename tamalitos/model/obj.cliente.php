<?php
class Cliente{
    private $id;
    private $nombre;
    private $apellido;
    private $celular;
    private $estado;
    private $nick;



    public function setAll($id,$nombre,$apellido,$celular,$estado){
        $this->id = $id;
        $this->nombre =  $nombre;
        $this->apellido =  $apellido;
        $this->celular =  $celular;
        $this->estado =  $estado;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }


    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }


    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
        return $this;
    }


    public function getCelular() {
        return $this->celular;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
        return $this;
    }


    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
        return $this;
    }

    public function getNick() {
        return $this->nick;
    }

    public function setNick($nick) {
        $this->nick = $nick;
        return $this;
    }





}