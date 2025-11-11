<?php
require_once "conexion.php";
require_once "objeto/usuarios.php";
class UsuariosModel extends Conectar{
    public function __construct(){
        parent::__construct();
    }
    public function crearUsuario(Usuarios $u){
        try{
            $sql = "INSERT INTO usuarios (nombre, apellido,genero,nacio,telefono) VALUES (:nombre, :apellido,:genero,:nacio,:telefono)";
            $sentencia = $this->conexion->prepare($sql);	
            $sentencia->bindValue(':nombre', $u->getNombre());		
            $sentencia->bindValue(':apellido',$u->getApellido());	
            $sentencia->bindValue(':genero',$u->getGenero());	
            $sentencia->bindValue(':nacio',$u->getNacio());	
            $sentencia->bindValue(':telefono',$u->getTelefono());					            

            $sentencia->execute();
            $result = $this->conexion->lastInsertId();
            return $result;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }   
    public function actualizarCliente(Cliente $c){
        try{
            $sql = "UPDATE TCliente SET cNombre = :nombre, cApellido = :apellido, cCelular = :celular WHERE nClieteID = :id";
            $sentencia = $this->conexion->prepare($sql);	
            $sentencia->bindValue(':nombre', $c->getNombre());
            $sentencia->bindValue(':apellido', $c->getApellido());
            $sentencia->bindValue(':celular', $c->getCelular());					
            $sentencia->bindValue(':id', $c->getId());		            
            $sentencia->execute();
            return($sentencia->rowCount() > 0) ? true : false;
        }catch(Exception $e){
            die($e->getMessage());
        }
    } 
    public function listarCliente(){
        try{
            $sql = "select * from usuarios";
            $consulta =  $this->conexion->prepare($sql);
            $consulta->execute();	
            $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);                           
            $clientes = [];
            foreach ($resultados as $fila) {
                $usuarios = new Usuarios();
                $usuarios->setAll($fila['nombre'],$fila['apellido'],$fila['genero'],$fila['nacio'],$fila['telefono']);
                $clientes[] = $usuarios;
            }
            return $clientes;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }      
}