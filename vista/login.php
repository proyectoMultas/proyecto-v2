<?php
include('../vista/interface.php');
plantilla("login");

print "
 <div class=\"row\">
        <div class=\"col-md-12\">
            <form action=\"../controlador/login.php\" method=\"post\" class=\"form-horizontal\" role=\"form\">
                <div class=\"form-group\">

                    <label class=\"col-sm-2 control-label\">
                        Usuario
                    </label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" name=\"usu\"/>
                    </div>
                </div>
                <div class=\"form-group\">

                    <label class=\"col-sm-2 control-label\">
                        Contraseña
                    </label>
                    <div class=\"col-sm-10\">
                        <input type=\"password\" class=\"form-control\" name=\"pass\"/>
                    </div>
                </div>



                        <input type=\"submit\" value=\"Enviar\" class=\"btn btn-info\">



            </form>
        </div>
    </div>
";
pie();
?>