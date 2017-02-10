<?php
require_once ('interface.php');
plantilla("Nuevo Alumno");

print " <form class=\"form-horizontal\" action=\"../controlador/insertAlumno.php\" method=\"post\" enctype=\"multipart/form-data\">
        <fieldset>

            <legend>Introducir Alumno</legend>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\">Nombre</label>
                <div class=\"col-md-8\">
                    <input name=\"nombre\" type=\"text\"  class=\"form-control input-md\">

                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\">Telefono</label>
                <div class=\"col-md-8\">
                    <input name=\"telf\" type=\"text\"  class=\"form-control input-md\">

                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\">D.N.I</label>
                <div class=\"col-md-8\">
                    <input name=\"dni\" type=\"text\"  class=\"form-control input-md\">

                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\">Contraseña</label>
                <div class=\"col-md-8\">
                    <input name=\"pass\" type=\"password\"  class=\"form-control input-md\">

                </div>
                <input name=\"uploadfile\" class=\"input-file\" type=\"file\"/>
            </div>
            <input type=\"submit\" value=\"Aceptar\" class=\"btn btn-info\">
            <input type=\"reset\" value=\"Borrar\" class=\"btn btn-info\">
            <a href=\"administrador.php\"> <input type=\"button\" value=\"volver\" class=\"btn btn-info\"></a>
        </fieldset>
    </form>
";
pie();
?>