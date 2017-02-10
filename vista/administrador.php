<?php
require_once('../vista/interface.php');
plantilla("administrador");
print "
<div class=\"row\">

    <div class=\"col-md-2\">
    </div>
    
        <div class=\"col-md-10\">
   
            <table class=\"table table-hover\">
        
                <thead>
    
                    <tr>
    
                        <th>Menu</th>
    
                    </tr>
    
                </thead>
    
                <tbody>
    
                    <tr>
    
                        <td><a href=\"nuevoAlum.php\"> Introducción de Alumnos</a></td>
                    </tr>
                    <tr>
                        <td><a href=\"matricular.php\"> Matricular alumnos en Módulos</a></td>
                    </tr>
                    <tr>
                        <td><a href=\"nuevoModulo\"> Introducción de Módulos</a></td>
                    </tr>
                    <tr>
                        <td><a href=\"nuevoProf\"> Introducción de Profesores</a>
                        </td>
                    </tr>
                    <tr>       
                    
                        <td><a href=\"asignarProf.html\"> Asignar módulos a profesores</a></td>                    </tr>

                </tbody>
            </table>
        </div>
    </div>
                    

";

pie();