<?php

class DataBase {

  public static function getDataBase () { 
     return new PDO('mysql:host=localhost;'
        .'dbname=web2Tp;charset=utf8'
        ,'root','root');    
        
    }


}



