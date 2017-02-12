<?php
include ('interface.php');
?>
    <form class="form-horizontal" method="post" action="../controlador/insertMatricula.php">
        <fieldset>


            <legend>Matricular en Modulo</legend>


            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Alumno</span>
                        <input  name="alumno" class="form-control" placeholder="D.N.I" type="text">
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