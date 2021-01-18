<?php

    
    require_once "../modelos/Profesores.php";
    require_once "../modelos/Logs.php";

    $profesores = new Profesores();

    $rut=isset($_POST["rut"])? limpiarCadena($_POST["rut"]):"";

    $nombres=isset($_POST["nombres"])? limpiarCadena($_POST["nombres"]):"";

    $apellido_paterno=isset($_POST["apellido_paterno"])? limpiarCadena($_POST["apellido_paterno"]):"";

    $apellido_materno=isset($_POST["apellido_materno"])? limpiarCadena($_POST["apellido_materno"]):"";

    $direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";

    $telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
    



    switch($_GET["op"]){

        case 'guardar' :
            

            $rspta = $profesores->guardar($rut,$nombres,$apellido_paterno,$apellido_materno,$direccion,$telefono);
            

            echo $rspta ? "profesor guardado satisfactoriamente" : "profesores no se pudo guardar";

        break;

    }

?>