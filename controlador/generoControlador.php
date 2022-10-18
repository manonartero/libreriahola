<?php
require_once './modelo/libroModelo.php'; 
require_once './vista/libroVista.php';
require_once './modelo/generoModelo.php';
require_once './vista/adminVista.php';
require_once 'adminControlador.php';
require_once './vista/generoVista.php';
require_once './helpers/adminHelper.php';

class generoControlador {
    private $libroModelo; 
    private $libroVista; 
    private $generoModelo;
    private $adminVista; 
    private $generoVista;  
    private $adminHelper; 


    public function __construct () { 
        $this->libroModelo = new LibroModelo(); 
        $this->libroVista = new LibroVista(); 
        $this->generoModelo = new generoModelo(); 
        $this->adminVista = new adminVista(); 
        $this->generoVista = new generoVista();
        $this->adminHelpers = new adminHelper(); 
  }
    public function obtenerGenero () { 
        $genero = $this->generoModelo->obtenerGenero(); 
        $this->generoVista->mostrarGenero($genero); 
    }

    public function agregarGenero() {
   
       // $adminHelper->checkLoggedIn();
      //  if(isset($_SESSION['islogged'])){
        $nombre_genero=$_POST['genero'];;
        $this->generoModelo->agregarGenero($nombre_genero); 
        header("Location: ".BASE_URL."generos");
        
}

    public function editarGenero () {
        
        $nombre_genero=$_POST ['nombre_genero_edit'];
        $id_genero=$_POST ['generoId'];
        $this->generoModelo->editarGenero($id_genero,$nombre_genero); 
        header("Location: ".BASE_URL."generos");
    }
    public function eliminarGenero () {
  
        $id_genero=$_POST ['id_genero'];
        $this->generoModelo->eliminarGenero($id_genero); 
        header("Location: ".BASE_URL."generos");
    }




}