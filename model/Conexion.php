<?php

class Conexion{
    private $cnx;

    function crearConexion(){
        $usuario='root';
        $password='S4m4300604';
        try{
            $this->cnx=new PDO('mysql:host=localhost:3306;dbname=farmaciasxad',$usuario,$password);
        }catch(PDOException $e){
            print_r("Erro al Conectar a la Base de datos".$e->getMessage());
            die();
        }
        return $this->cnx;
    }
    function cerrarConexion(){
        $this->cnx=null;
    }
}