<?php
require_once ('../modelo/cicloDB.php');
include('../vista/interface.php');


plantilla("login");
$tipoUsu=cicloDB::obtieneUsuario($_POST['usu'],$_POST['pass']);
echo $tipoUsu;


if($tipoUsu != ""){
    session_start();
    $_SESSION['usuario']=$tipoUsu;
    header("Location: ../vista/administrador.php");
}else{
    
    echo " El usuario no existe ";
}

pie();
?>