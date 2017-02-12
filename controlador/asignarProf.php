<?php
/**
 * Created by PhpStorm.
 * User: adria
 * Date: 11/02/2017
 * Time: 20:07
 */
include ('../vista/asignarProfesor.php');
include ('../modelo/cicloDB.php');
if($_POST['profesor']==''||$_POST['modulo']==''){
    echo "Rellena todos los campos";
}else {
    $asignar = cicloDB::asignarProfesor($_POST['profesor'], $_POST['modulo']);

    if ($asignar) {
        echo "Profesor asignado al modulo";
    } else {
        echo "Error: El profesor se pudo ser asigadno";
    }
}
?>