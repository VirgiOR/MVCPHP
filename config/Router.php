<?php
class Router {
    public static function enrutar($uri,$bd) {
        switch ($uri) {
           //registro usuarios
           case "/registro":
            require_once("app/controller/usuarioController.php");

            $controlador= new UsuarioController($bd);
            $controlador->mostrar_registro();
            break;
            default:
            http_response_code(404);

            echo "<h2> 404 - Página no encontrada</h2>";
            break;
    }

 

}


?>