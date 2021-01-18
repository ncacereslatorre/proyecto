
<?php

require "../config/conexion.php";


Class Logs{

    public function __construct(){


    }

    public function guardar($metodo,$trazaArray){

        $sql = "INSERT INTO logs (metodo,trazaArray) VALUES('$metodo','$trazaArray')";
        ejecutarConsulta($sql);
    }



}


?>