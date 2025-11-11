<?php
require_once "conexion.php";
class ClienteModel extends Conectar{
    public function __construct(){
        parent::__construct();
    }
 
    public function crearCliente(Cliente $c){
        try{
            $sql = "INSERT INTO TCliente (cNombre, cApellido, cCelular) VALUES (:nombre, :apellido,:cel)";
            $sentencia = $this->conexion->prepare($sql);	
            $sentencia->bindValue(':nombre', $c->getNombre());		
            $sentencia->bindValue(':apellido',$c->getApellido());	
            $sentencia->bindValue(':cel',$c->getCelular());					            
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
            $sql = "select * from TCliente";
            $consulta =  $this->conexion->prepare($sql);
            $consulta->execute();	
            $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);                           
            $clientes = [];
            foreach ($resultados as $fila) {
                $cliente = new Cliente('','','','');
                $cliente->setAll(
                    $fila['nClienteID'],
                    $fila['nombre'],
                    $fila['apellido'],
                    $fila['celular'],
                    $fila['estado']);
                $clientes[] = $cliente;
            }
            return $clientes;
        }catch(Exception $e){
            die($e->getMessage());
        }
        }
        public function detalleAdmin($id){
            try{
                $sql = "select * from admin where adminID = :id";				
                $sentencia = $this->conexion->prepare($sql);
                $sentencia->bindParam(':id', $id);						
                $sentencia->execute();			
                $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);	
                if($resultado){
                    $admin = new Admin();
                    $admin->setAll($resultado['adminID'],$resultado['nick'],$resultado['pass'],$resultado['estado']);
                    return $admin;
                }else{
                    return null;
                }

            }catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function validarAdmin($nick){
            try{
                $sql = "select * from admin where nick = :nick";				
                $sentencia = $this->conexion->prepare($sql);
                $sentencia->bindParam(':nick', $nick);						
                $sentencia->execute();			
                $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);	
                if($resultado){
                    $admin = new Admin();
                    $admin->setAll($resultado['adminID'],$resultado['nick'],$resultado['pass'],$resultado['estado']);
                    return $admin;
                }else{
                    return null;
                }
            }catch(Exception $e){
                die($e->getMessage());
            }
        }        


        public function actualizarPassword(Admin $admin){
            try{
                $sql = "UPDATE admin SET pass = :password WHERE adminID = :id";
                $sentencia = $this->conexion->prepare($sql);	
                $sentencia->bindValue(':password',$admin->getPassword());						
                $sentencia->bindValue(':id', $admin->getId());		            
                $sentencia->execute();
                return($sentencia->rowCount() > 0) ? true : false;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }        
        public function actualizarEstado(Admin $admin){
            try{
                $sql = "UPDATE admin SET estado = :estado WHERE adminID = :id";
                $sentencia = $this->conexion->prepare($sql);	
                $sentencia->bindValue(':estado', $admin->getEstado());		
                $sentencia->bindValue(':id', $admin->getId());		            
                $sentencia->execute();
                return($sentencia->rowCount() > 0) ? true : false;
            }catch(Exception $e){
                die($e->getMessage());
            }
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