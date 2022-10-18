<?php
require_once './modelo/libroModelo.php'; 
require_once './vista/libroVista.php';
require_once './modelo/generoModelo.php';
require_once './vista/adminVista.php';
require_once 'adminControlador.php';
require_once './helpers/adminHelper.php';

class libroControlador {
    private $libroModelo; 
    private $libroVista; 
    private $generoModelo;
    private $adminVista; 
    private $adminHelper; 


    public function __construct () {
        $this->libroModelo = new LibroModelo(); 
        $this->libroVista = new LibroVista(); 
        $this->generoModelo = new generoModelo(); 
        $this->adminVista = new adminVista(); 
        $this->adminHelper= new adminHelper(); 
    }

    public function obtenerLibros () {
        $libros = $this->libroModelo->obtenerLibros(); 
        $genero = $this->generoModelo->obtenerGenero(); 
        $this->libroVista->mostrarLibros($libros,$genero); 
    }

    public function agregarLibro() {
       // $adminHelper->checkLoggedIn();
        $nombreLibro=$_POST['libro'];
        $nombreAutor=$_POST['autor'];
        $resumen=$_POST['resumen'];
        $id_genero=$_POST ['genero'];
        $this->libroModelo->agregarLibro($nombreLibro,$nombreAutor,$resumen,$id_genero); 
        header("Location:" . BASE_URL."libros");
}

    public function obtenerLibrosAdmin () {
        $libros = $this->libroModelo->obtenerLibros(); 
        $genero = $this->generoModelo->obtenerGenero(); 
        $this->adminVista->mostrarLibrosAdmin($libros,$genero); 
    }

    public function eliminarLibro () {
  
        $id_libro=$_POST['id_libro']; 
        $this->libroModelo->eliminarLibro($id_libro); 
        header("Location: " . BASE_URL."libros");
    }

    public function editarLibro () {
       
        $id_libro = $_POST ['libroEditId'];
        $nombreLibro=$_POST['libroEdit'];
        $nombreAutor=$_POST['autorEdit'];
        $resumen=$_POST['resumenEdit'];
        $id_genero=$_POST ['generoEdit'];
        $this->libroModelo->editarLibro($id_libro,$nombreLibro,$nombreAutor,$resumen,$id_genero); 
        header("Location: " . BASE_URL."libros");
    }

    public function mostrarLibrosPorGenero () {
        $id_genero = $_POST ['buscarPorGenero'];
        $libros = $this->libroModelo->obtenerLibrosPorGenero($id_genero); 
        $genero = $this->generoModelo->obtenerGenero(); 
        $this->libroVista->mostrarLibros($libros,$genero);
    }

    public function mostrarLibrosPorId () {
        $id_libro = $_POST ['id_libro'];
        $libros = $this->libroModelo->obtenerLibrosPorId($id_libro); 
        $genero = $this->generoModelo->obtenerGenero(); 
        $this->libroVista->mostrarLibroDetalle($libros,$genero);
    }


  

  


}






    //verifica datos obligatorios
   // public function mostrarLibrosPorGenero () {
   //     if (!isset($_GET ['nombre_genero'])|| empty ($_GET ['nombre_genero'])) {
   //         $this -> view -> renderError(); 
   //        return; 
   //     }
  
    //obtiene el genero enviado por get
   // $nombre_genero = $_GET ['nombre_genero']; 

    //obtener libros por genero del modelo 
    //$nombre_libro = $this->model ->getPorGenero ($nombre_genero); 


    //mostrar resultados en vista 
   //     $this ->view->mostrarLibrosPorGenero ($nombre_genero,$nombre_libro);


