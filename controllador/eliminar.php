<?php

include "modelo/conexion.php";

if (!empty($_GET["id"])) {

        $id=$_GET["id"];
        $sql=$conexion->query("delete from persona where id_persona=$id ");

        if ($sql==1) {
            echo "Eliminado exitoso";
        } else {
            echo "Error al eliminar";
        }

}

?>