<?php
require_once './librerias/smarty-master/libs/Smarty.class.php'; 


class generoVista { 
    private $smarty; 
    private $adminHelper;
    function __construct () { 
       $this->smarty=new Smarty();
       $this->adminHelper = new adminHelper(); 
    }

    public function mostrarGenero($genero) {
        //$this->adminHelper->checkLoggedIn();
        $this->smarty->assign('genero',$genero); 
        $this->smarty->display('./templates/generos.tpl');
     
        }
    
    
    
}