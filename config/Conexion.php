<?php
class Conexion{

    public static function Conectar() {

        include __DIR__ . "/Datos.php";
        $datos = $CONEXION['desarrollo'];

        $con = 'mysql:host=' . $datos['host'];
        $con .= ';dbname=' . $datos['db'];
        try {
            $conexion = new PDO($con, $datos['user'], $datos['pass']);
        } catch (Exception $e) {
            echo "<b> Hubo un error </b>";
        }
        return $conexion;
    }

}