<?php
require_once "conexion.php";
class UsuarioModel extends Conectar{
    public function __construct(){
        parent::__construct();
    }
    public function validarLogin(Usuario $user){
        try{
            $sql = "select * from tusuario where cNick = :nick";				
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindValue(':nick', $user->getNick());						
            $sentencia->execute();			
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);	
            if($resultado){
                $usuario = new Usuario();
                $usuario->setAll($resultado['nUsuarioID'],$resultado['cNick']);
                return $usuario;
            }else{
                return null;
            }
        }catch(PDOException $e) {
            throw new Exception("Error al validar login: " . $e->getMessage());
        }
    }  
    public function detalleUsuario($id){
        try{
            $sql = "select * from tusuario where nUsuarioID = :id";				
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(':id', $id);						
            $sentencia->execute();			
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);	
            if($resultado){
                $usuario = new Usuario();
                $usuario->setAll($resultado['nUsuarioID'],$resultado['cNick']);
                return $usuario;
            }else{
                return null;
            }
        }catch (PDOException $e){
            throw new Exception("Error al consultar usuario: " . $e->getMessage());
        }
    }  
}