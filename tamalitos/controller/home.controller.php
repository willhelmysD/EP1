<?php
require_once "model/obj.usuario.php";
require_once "model/usuario.model.php";
require_once "base.controller.php";

class HomeController extends BaseController{
    private $model_usuario;
    public function __construct(){
        parent::__construct(); // Hereda la sesión y perfil
        $this->requireLogin();
        $this->model_usuario = new UsuarioModel();
    }
    public function Inicio(){
        $lista = $this->model_usuario->listarUsuario();
        require_once "view/home.view.php";
    }
}