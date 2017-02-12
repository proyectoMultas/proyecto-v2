<?php
/**
 * Created by PhpStorm.
 * User: adria
 * Date: 11/02/2017
 * Time: 10:35
 */

include ('../vista/nuevoModulo.php');
include ('../modelo/cicloDB.php');
if($_POST['nombre']==''||$_POST['codigo']==''||$_POST['duracion']==''){
 echo "Hay que rellenar todos los campos";
}else {
    $nuevoModulo = cicloDB::InsertModulo($_POST['nombre'], $_POST['codigo'], $_POST['duracion']);
    if ($nuevoModulo) {
        echo "modulo insertdo";
    } else {
        echo "el modulo ya existe";
    }
}
?>