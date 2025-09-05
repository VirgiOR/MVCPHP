<?php
require_once('app/modelos/Usuario.php');

class UsuarioController {
    private$bd;

    public function __construct($bd)  {

        $this->$bd=$bd;
    }

    public function mostrar_registro() {
        $vista= 'app/vistas/usuarios/registro.php';
        require ('app/vistas/layout.php');
    }
}





?>