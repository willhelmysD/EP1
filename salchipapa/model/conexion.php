<?php
    require_once 'config.php';
    class Conectar{
        protected  $conexion;
        public function __construct(){
            try{
                $this->conexion = new PDO("mysql:host=".DB_SERVIDOR.";dbname=".DB_NOMBRE.";charset=utf8",DB_USER,DB_CLAVE);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);          
            }catch (PDOException $e) {
                die("Fallo: ".$e->getMessage());
            }
        }

        private function getConexion() {
            return $this->conexion;
        }
    }

