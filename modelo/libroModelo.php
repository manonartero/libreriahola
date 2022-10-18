<?php

require_once './controlador/libroControlador.php'; 
require_once './vista/libroVista.php';



class libroModelo {
    
    private $db;
   
    public function __construct(){
        $this->db=DataBase::getDataBase();
    }

    //function get mostrar los datos de toda la tabla libros.
    public function obtenerLibros () {  
        $sentencia = $this->db->prepare("SELECT * FROM libro");
        $sentencia->execute();
        return  $sentencia->fetchAll(PDO::FETCH_OBJ);
    }   
     
    //function add agregar datos 
    public function agregarLibro ($nombreLibro,$nombreAutor,$resumen,$id_genero) {
        $sentencia = $this->db->prepare 
        ("INSERT INTO libro (nombre_libro,nombre_autor,resumen,id_genero) VALUES(?,?,?,?)");
        $sentencia->execute(array($nombreLibro,$nombreAutor,$resumen,$id_genero));  
    }

    //function delete borrar datos 
    public function eliminarLibro ($id_libro) {
        $sentencia =$this->db->prepare("DELETE FROM libro WHERE id_libro=?");
        $sentencia->execute(array($id_libro)); 
    }

    //funcion editar datos, falta agregar genero
    public function editarLibro ($id_libro,$nombreLibro,$nombreAutor,$resumen,$id_genero) { 
       $sentencia =$this->db->prepare("UPDATE libro SET nombre_libro=?,nombre_autor=?,resumen=?,id_genero=? WHERE id_libro=?");
       $sentencia->execute(array($nombreLibro,$nombreAutor,$resumen,$id_genero,$id_libro));   
     }

    public function obtenerLibrosPorGenero($id_genero) {
        // 2. ejecuto la sentencia (2 subpasos)
        $sentencia= $this->db->prepare("SELECT * FROM libro WHERE id_genero = ?");
        $sentencia->execute(array($id_genero));
        $librosGenero = $sentencia->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de productos 
        return $librosGenero;
    }

    public function obtenerLibrosPorId ($id_libro) {  
        $sentencia = $this->db->prepare("SELECT * FROM libro WHERE id_libro =?");
        $sentencia->execute(array($id_libro));
        return  $sentencia->fetchAll(PDO::FETCH_OBJ);
    }   


}


