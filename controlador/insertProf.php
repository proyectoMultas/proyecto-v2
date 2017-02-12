<?php
/**
 * Created by PhpStorm.
 * User: adria
 * Date: 11/02/2017
 * Time: 19:13
 */
include ("../vista/nuevoProfesor.php");
include ("../modelo/cicloDB.php");
if($_POST['dni']=='' || $_POST['nombre']==''|| $_POST['telf']==''||$_POST['pass']==''){
    echo "No puede haber campos vacio";
}else {
    $insertPro = cicloDB::insertarUsuario($_POST['dni'], $_POST['nombre'], $_POST['telf'], $_POST['pass'], "P", "");

    if ($insertPro) {
        echo "Profesor contratado";

    } else {
        echo "Error: Profesor no contratado";
    }
}
?>