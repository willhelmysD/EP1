<?php
require_once 'model/trabajador.model.php';
Class IndexController{
    
    private $modelo_trabajador;

    public function __construct(){
        $this->modelo_trabajador = new TrabajadorModel();
    }

    public function Inicio(){
        $lista = $this->modelo_trabajador->listarRegistros();
        require_once "view/index.view.php";
    }

    public function Nuevo(){        
        require_once "view/nuevo.view.php";
    }

    public function Guardar(){      

        

        $t = new Trabajador();  
        $nombre = $_POST['nombre']; 
        $apellido = $_POST['apellido']; 
        $cargo = $_POST['cargo'];
        $horas = $_POST['horas'];
        $ganacia = match ($cargo) {
            'Tecnico' => $horas * 25,
            'Tecnologo' => $horas * 50,
            'ingeniero' => $horas * 75,
        };  
        $t->setNombre($nombre)
            ->setApellido($apellido)
            ->setCargo($cargo)
            ->setHoras($horas)
            ->setGanancia($ganacia);     
            $rta = $this->modelo_trabajador->CrearRegistro($t);

    }

    public function Reportes(){
        $lista = $this->modelo_trabajador->listarRegistros();
        require_once "view/reportes.view.php";
    }

}

