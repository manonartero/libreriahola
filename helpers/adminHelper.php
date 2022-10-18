
<?php

class adminHelper {

     //Verifica que el user este logueado y si no lo está lo redirige al login.
    public function checkLoggedIn() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }  
        
        if (!isset($_SESSION['email'])) {
            header("Location: " . BASE_URL);
            die();
        }
    } 
    public function logout() {
        session_start();
        session_destroy();

       // encabezado("Location: " . BASE_URL);
    }

}