<?php
/**
 * Created by PhpStorm.
 * User: adria
 * Date: 12/02/2017
 * Time: 19:09
 */

include ("../vista/interface.php");
include ("../modelo/cicloDB.php");
session_start();
$alumnos=cicloDB::cogerAlumnos($_SESSION['profesor']);
?>