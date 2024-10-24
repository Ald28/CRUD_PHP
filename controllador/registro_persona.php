<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha_nac"]) and !empty($_POST["correo"])){
        
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fecha_nac"];
        $correo=$_POST["correo"];

        $sql = $conexion->query("insert into persona (nombre,apellido,dni,fecha_nac,correo) values ('$nombre','$apellido','$dni','$fecha','$correo')");
        if ($sql==1) {
            echo "Registro exitoso";
        } else {
            echo "Error al registrar";
        }

    } else {
        echo "CAMPOS FALTANTES";
    }

}


?>