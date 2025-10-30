<?php
require_once "model/obj.usuario.php";
require_once "model/usuario.model.php";
require_once "base.controller.php";

//require_once "model/admin.model.php";

class IndexController extends BaseController{
    private $usuario;
    public function __construct(){
        parent::__construct(); // Hereda la sesión y perfil
        // Evita redirección si estamos ejecutando logout
        $accion = isset($_GET['accion']) ? $_GET['accion'] : 'inicio';
        if($accion !== 'logout') {
            $this->requireLogout();
        }        
        //$this->requireLogout();
        $this->usuario = new UsuarioModel();
    }
    public function Inicio(){
        require_once "view/login.view.php";
    }
    public function Login(){
        if(isset($_POST['nick']) && !empty(trim($_POST["nick"]))){
            $user = new Usuario();
            $nick = trim($_POST["nick"]);
            $user->setNick($nick);
            $rta = $this->usuario->validarLogin($user);
            if($rta){
                $_SESSION['usuario'] = $rta->getID();
                header("Location: index.php?url=home");
                exit;
            }else{ 
                echo "Usuario No Registrado!"; 
            }
        }else {
            echo "Todos los campos son obligartorios";
        }  
        /*
        if(
            isset($_POST["nick"],$_POST["password"]) && 
            !empty(trim($_POST["usuario"])) &&
            !empty(trim($_POST["password"]))){     

            $nick = trim($_POST["usuario"]);
            $pass = trim($_POST["password"]); 

            $admin = new Admin();
            $rta = $this->modelo_user->validarAdmin($nick);
            if($rta){
                if(password_verify($pass, $rta->getPassword())) {
                    $_SESSION['usuario'] = $rta->getId();
                    header("Location: home.php");
                    exit;
                }else{
                    echo "Contraseña equivocada";
                }
            }else{
                echo "Usuario No Registrado!"; 
            };                        
        } else {
            echo "Todos los campos son obligartorios";
        }         
*/
    }
    public function logout(){

        session_start();
        session_destroy();
        header("Location: index.php");

        exit;       
    }
}