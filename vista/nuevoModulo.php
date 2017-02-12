<?php
include('interface.php');
plantilla("Nuevo Modulo");
?>

<form class="form-horizontal" action="../controlador/insertModulo.php" method="post">
    <fieldset>
        <legend>Modulo</legend>
        <div class="form-group">
            <label class="col-md-4 control-label">Nombre</label>
            <div class="col-md-8">
                <input name="nombre" type="text" class="form-control input-md">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Código</label>
            <div class="col-md-8">
                <input name="codigo" type="text" class="form-control input-md">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Duración</label>
            <div class="col-md-8">
                <input name="duracion" type="text" class="form-control input-md">

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