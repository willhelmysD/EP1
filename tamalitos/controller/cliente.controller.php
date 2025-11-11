<?php
require_once "base.controller.php";

class ClienteController extends BaseController{
    
    public function __construct(){
        parent::__construct(); // Hereda la sesión y perfil
    }
    public function Inicio(){        
        //require_once "view/home.view.php";
        require_once "view/home.view.php";
    }
}