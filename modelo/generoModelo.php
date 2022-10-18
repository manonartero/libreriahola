<?php

require_once "./utils/DataBase.php";

class generoModelo {
    
    private $db;

    public function __construct(){
        $this->db=DataBase::getDataBase();
    }

    //function get mostrar los datos
    public function obtenerGenero() {  
        $sentencia = $this->db->prepare( "SELECT * FROM genero");
        $sentencia->execute();
        return  $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
     
    //function add agregar datos 
    //funcion solo para el admin
    public function agregarGenero($nombre_genero) {
        $sentencia = $this->db->prepare ("INSERT INTO genero (nombre_genero) VALUES(?)");
        $sentencia->execute(array($nombre_genero));  
    }

    //function delete borrar datos 
    //funcion solo para el admin
    function eliminarGenero ($id_genero) {
        $sentencia = $this->db->prepare("DELETE FROM genero WHERE id_genero=?");
        $sentencia->execute(array($id_genero)); 
    }

    //funcion editar genero 
    //funcion solo para el admin
    public function editarGenero ($id_genero,$nombre_genero) { 
        $sentencia = $this->db->prepare("UPDATE genero SET nombre_genero=? WHERE id_genero=?");
        $sentencia->execute(array($nombre_genero,$id_genero)); 
     }



}