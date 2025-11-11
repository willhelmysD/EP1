<?php
//require_once "base.controller.php";
require_once "objeto/usuarios.php";
require_once "model/usuarios.model.php";
class IndexController{
    private $modelo_usuario;
    public function __construct(){
        $this->modelo_usuario = new UsuariosModel();
    }
    public function Inicio(){
        $lista_usuarios = $this->modelo_usuario->listarCliente();
        require_once "view/index.view.php";
    }
    public function nuevo(){
        require_once "view/nuevo.view.php";
    }
    public function guardar(){
        $user = new Usuarios(); 
        $n = $_POST['nombre'];
        $a = $_POST['apellido'];
        $g = $_POST['genero'];
        $d = $_POST['nacimiento'];
        $t = $_POST['telefono'];
        $user->setAll($n, $a, $g, $d, $t);
        $save = $this->modelo_usuario->crearUsuario($user);
        echo $save;
    }
}