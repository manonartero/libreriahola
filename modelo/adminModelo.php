<?php

require_once "./utils/DataBase.php";

class adminModelo {
    
    private $db;

    public function __construct() {
        $this->db=DataBase::getDataBase();
    }

    public function obtenerUsuarioPorMail($email) {
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
        $sentencia->execute([$email]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }


    //function agregar usuario 
    //eliminar usuario 
    

}