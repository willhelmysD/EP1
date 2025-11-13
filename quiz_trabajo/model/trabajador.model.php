<?php
require_once "conexion.php";
require_once "trabajador.php";
class TrabajadorModel extends Conectar{
    public function __construct(){
        parent::__construct();
    }
    public function crearRegistro(Trabajador $t){
        try{
            $sql = "INSERT INTO trabajador (nombre, apellido,cargo,horas,ganancia) 
            VALUES (:nombre, :apellido,:cargo,:horas,:ganancia)";
            $sentencia = $this->conexion->prepare($sql);	
            $sentencia->bindValue(':nombre', $t->getNombre());		
            $sentencia->bindValue(':apellido',$t->getApellido());	
            $sentencia->bindValue(':cargo',$t->getCargo());	
            $sentencia->bindValue(':horas',$t->getHoras());	
            $sentencia->bindValue(':ganancia',$t->getGanancia());					            
            $sentencia->execute();
            $result = $this->conexion->lastInsertId();
            return $result;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }   
    public function listarRegistros(){
        try{
            $sql = "select * from trabajadores";
            $consulta =  $this->conexion->prepare($sql);
            $consulta->execute();	
            $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);                           
            $array = [];
            foreach ($resultados as $fila) {
                $trabajador = new Trabajador();
                $trabajador->setNombre($fila['nombre'])
                            ->setApellido($fila['apellido'])
                            ->setCargo($fila['cargo'])
                            ->setHoras($fila['horas'])
                            ->setGanancia($fila['ganancia']);   
                $array[] = $trabajador;
            }
            return $array;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }      
}