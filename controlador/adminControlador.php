<?php 
require_once './vista/adminVista.php';
require_once './modelo/adminModelo.php';


class adminControlador  {

    private $adminVista; 
    private $adminModelo; 
   
    public function __construct () { 
        $this->adminVista = new adminVista (); 
        $this->adminModelo = new adminModelo (); 
    }

    public function mostrarInicio() { 
        $this->adminVista->mostrarInicio(); 
    }
    
    public function mostrarFormularioLogin() {
        $this->adminVista->mostrarFormularioLogin();
    }


    public function validarUsuario() { 

        if ((isset($_POST['email'])&&!empty($_POST['email']))&&(isset($_POST['password'])&&!empty($_POST['password']))){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $usuario = $this->adminModelo->obtenerUsuarioPorMail($email);
        $hash = password_hash($password,PASSWORD_DEFAULT); 
       
        if ($usuario && password_verify(($usuario->password),$hash)) {
            session_start();
            $_SESSION['usuario_id']=$usuario->id_usuario;
            $_SESSION['usuario_email'] =$usuario->email;
            $_SESSION['islogged'] = true;
            $this->adminVista->mostrarInicio();   
    }
         else {
            $this->adminVista->mostrarFormularioLogin("El usuario o la contraseña no existen");
        }
    }       
  }     

  


}