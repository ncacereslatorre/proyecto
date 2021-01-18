<?php

    require "../config/Conexion.php";


    Class Profesores{

        public function __construct(){
                        
        }

        public function guardar($rut,$nombres,$apellido_paterno,$apellido_materno,$direccion,$telefono){
            
            $sql = "INSERT INTO profesores (rut,nombres,apellido_paterno,apellido_materno,direccion,telefono) 
            VALUES('$rut','$nombres','$apellido_paterno','$apellido_materno','$direccion','$telefono')";

            ejecutarConsulta($sql);
        }



    }


?>