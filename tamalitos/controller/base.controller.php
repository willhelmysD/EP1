<?php
require_once "model/usuario.model.php";
class BaseController {
    protected $modelo_user;
    protected $perfil;

    public function __construct() {
        if(session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $this->modelo_user = new UsuarioModel();
        if(isset($_SESSION['usuario'])) {
            $this->perfil = $this->modelo_user->detalleUsuario($_SESSION['usuario']);
        }else{
            $this->perfil = null;
        }
    }
    
    protected function requireLogin() {
        if (!$this->perfil) {
            header("Location: index.php");
            exit;
        }
    }

    protected function requireLogout(){
        if($this->perfil) {
            header("Location: index.php?url=home"); 
            exit;
        }
    }
}