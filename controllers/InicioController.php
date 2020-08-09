<?php 
    class InicioController {
        public function index() {
            require_once ('views/index.php');
        }
        public function param( $param ) {
            echo 'El valor del paramatro es:' . $param;
        }
    }