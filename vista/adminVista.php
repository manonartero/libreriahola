<?php
require_once './librerias/smarty-master/libs/Smarty.class.php'; 
require_once './controlador/libroControlador.php'; 
require_once './controlador/adminControlador.php'; 


class adminVista { 
    private $smarty; 
    function __construct () { 
       $this->smarty=new Smarty(); 
    }
    public function mostrarLibrosAdmin($libros,$genero) {
       
        $this->smarty->assign('libros',$libros); 
        $this->smarty->assign('genero',$genero); 
        $this->smarty->display('./templates/libros.tpl'); 
        }
    
    public function mostrarGeneroAdmin ($genero) {
        
            $this->smarty->assign('genero',$genero); 
            $this->smarty->display('./templates/generos.tpl'); 
        }

    public function mostrarInicio(){ 
            $this->smarty->display('./templates/inicio.tpl'); 
        }
    public function mostrarFormularioLogin($error= null) {
            $this->smarty->assign("error", $error);
            $this->smarty->display('./templates/formularioLogin.tpl');
        } 

    
    
       
}   




//  $this->smarty->assign("error", $error);
//$this->smarty->display('./templates/formularioLogin.tpl');
        
    

