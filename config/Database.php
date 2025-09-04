<?php

define('HOST', 'localhost');
define('PORT','3306');
define('DBNAME','tienda_web');
define('user','admin_tienda');
define('PASSWORD','p100cpbvepatv!');




class Database{
    private static $instanciaBD = null;
    private $bd;

    private function __construct() {
        $this->db = new PDO(
            'mysql:'.HOST.':'.POST.';dbname='.DBNAME,
            USER, PASSWORD
        );

    }

    public static function getInstancia(){
        if (self::$intanciaBD===null){
            self:: new Database();
        }
        return self::$instanciaBD->bd;

    }
}




?>