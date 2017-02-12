<?php
require_once('../vista/interface.php');
plantilla("administrador");
?>
<div class="row">

    <div class="col-md-2">
    </div>
    
        <div class="col-md-10">
   
            <table class="table table-hover">
        
                <thead>
    
                    <tr>
    
                        <th>Menu</th>
    
                    </tr>
    
                </thead>
    
                <tbody>
    
                    <tr>
    
                        <td><a href="nuevoAlum.php"> Introducción de Alumnos</a></td>
                    </tr>
                    <tr>
                        <td><a href="matricularAlumno.php"> Matricular alumnos en Módulos</a></td>
                    </tr>
                    <tr>
                        <td><a href="nuevoModulo.php"> Introducción de Módulos</a></td>
                    </tr>
                    <tr>
                        <td><a href="nuevoProfesor.php"> Introducción de Profesores</a>
                        </td>
                    </tr>
                    <tr>       
                    
                        <td><a href="asignarProfesor.php"> Asignar módulos a profesores</a></td>                    </tr>

                </tbody>
            </table>
        </div>
    </div>
                    

<?php

pie();
?>