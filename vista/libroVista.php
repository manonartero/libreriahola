<?php
require_once './librerias/smarty-master/libs/Smarty.class.php'; 



class libroVista { 
    private $smarty; 
    function __construct () { 
       $this->smarty=new Smarty(); 
    }

    public function mostrarLibros ($libros,$genero) {
      //  if (session_status() == PHP_SESSION_NONE) {
     //       session_start();
      //  }
        $this->smarty->assign('libros',$libros); 
        $this->smarty->assign('genero',$genero); 
        $this->smarty->display('./templates/libros.tpl'); 
        }
    
    public function mostrarLibroDetalle ($libro,$genero) {
        $this->smarty->assign ('libro',$libro);
        $this->smarty->assign('genero',$genero); 
        $this->smarty->display ('./templates/libroCompleto.tpl'); 

    }
}