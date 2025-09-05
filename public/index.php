<?php
session_star();

//carganos los ficheros PHP necesarios
require_once('config/Database.php');
require_once('config/Router.php');


//OBTENEMOS UNA CONEXIÓN A LA BASE DE DATOS
$bd = Database::getInstancia();

//Obtenemos la uri
$bd = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH;

Router::enrutar($uri,$bd);




?>