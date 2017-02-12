<?php
/**
 * Created by PhpStorm.
 * User: adria
 * Date: 11/02/2017
 * Time: 13:20
 */

include("../vista/matricularAlumno.php");
include("../modelo/cicloDB.php");

if($_POST['alumno']==''||$_POST['modulo']==''){
    echo "Rellena todos los campos";
}else {
    $matricular = cicloDB::matricularAlumno($_POST['alumno'], $_POST['modulo']);

    if ($matricular) {
        echo "alumno matriculado";
    } else {
        echo "Error: alumno no matriculado";
    }
}
?>