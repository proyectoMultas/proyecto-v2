<?php
/**
 * Created by PhpStorm.
 * User: adria
 * Date: 11/02/2017
 * Time: 19:56
 */
include ("interface.php");
plantilla("Asignar Profesor");

?>
<form class="form-horizontal" action="../controlador/asignarProf.php" method="post">
    <fieldset>


        <legend>Asignar en Modulo</legend>


        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">Profesor</span>
                    <input  name="profesor" class="form-control" placeholder="D.N.I" type="text">
                </div>

            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">Modulo</span>
                    <input name="modulo" class="form-control" placeholder="Codigo" type="text">
                </div>

            </div>
        </div>
        <input type="submit" value="Aceptar" class="btn btn-info">
        <input type="reset" value="Borrar" class="btn btn-info">
        <a href="../vista/administrador.php"> <input type="button" value="volver" class="btn btn-info"></a>
    </fieldset>
</form>


<?php
pie();
?>
