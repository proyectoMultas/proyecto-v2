<?php
require_once ('../modelo/cicloDB.php');
include('../vista/interface.php');


plantilla("login");
$tipoUsu=cicloDB::obtieneUsuario($_POST['usu'],$_POST['pass']);
echo $tipoUsu;


if($tipoUsu != ""){
    session_start();
    $_SESSION['usuario']=$tipoUsu;
    
    if($tipoUsu=='A') {
        header("Location: ../vista/administrador.php");
    } else if($tipoUsu=="P"){
        $_SESSION['profesor']=$_POST['usu'];
        header("Location: ../vista/profesor.php");
    }else{
        header("Location: ../vista/alumno.php");
    }

}else{
    
    echo " El usuario no existe ";
}

pie();
?>