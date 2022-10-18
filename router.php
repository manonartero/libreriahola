<?php
require_once './controlador/libroControlador.php';
require_once './controlador/adminControlador.php';
require_once './controlador/generoControlador.php';
require_once 'RouterClass.php';

define("BASE_URL",'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$r = new Router();  


$r->setDefaultRoute("adminControlador","mostrarInicio"); 

$r->addRoute("libros","GET","libroControlador","obtenerLibros"); 

$r->addRoute("libroDetalles", "POST", "libroControlador","mostrarLibrosPorId");

$r->addRoute("buscar", "POST", "libroControlador","mostrarLibrosPorGenero");

$r->addRoute("agregarLibro","POST","libroControlador","agregarLibro"); 

$r->addRoute("libros","GET","libroControlador","obtenerLibrosAdmin"); 

$r->addRoute("eliminarLibro","POST","libroControlador","eliminarLibro"); 

$r->addRoute("editarLibro","POST","libroControlador","editarLibro"); 







$r->addRoute("agregarGenero","POST","generoControlador","agregarGenero"); 

$r->addRoute("generos","GET","generoControlador","obtenerGenero"); 

$r->addRoute("eliminarGenero","POST","generoControlador","eliminarGenero"); 

$r->addRoute("editarGenero","POST","generoControlador","editarGenero"); 

$r->addRoute("formularioLogin","GET","adminControlador","mostrarFormularioLogin"); 

$r->addRoute("validar","POST","adminControlador","validarUsuario"); 



$r->route($_GET['action'],$_SERVER['REQUEST_METHOD']);





