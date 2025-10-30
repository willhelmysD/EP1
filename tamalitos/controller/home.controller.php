<?php
require_once "model/obj.usuario.php";
require_once "base.controller.php";

class HomeController extends BaseController{
    public function __construct(){
        parent::__construct(); // Hereda la sesión y perfil
        $this->requireLogin();
    }
    public function Inicio(){
        require_once "view/home.view.php";
    }
}