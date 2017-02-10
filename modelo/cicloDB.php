<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 10/02/2017
 * Time: 12:33
 */
class cicloDB{
    protected static function conexion(){

        $c=new mysqli('localhost', 'root', '', "ciclos");
        $c->set_charset("utf8");
        return $c;
    }

    protected static function ejecutaConsulta($sql) {

        $c=self::conexion();
        return $rs=$c->query($sql);
    }
    public static function obtieneDNIs($curso) {

        $select="select DNI_ALUMNO from cursa where COD_MODULO='".$curso."'";
        $resultado=self::ejecutaConsulta($select);
        $lista=array();

        if($resultado){

            $fila=$resultado->fetch_array();

            while($fila!=null) {

                $lista[] = $fila;

                $fila = $resultado->fetch_array();
            }
        }
        return $lista;
    }
    public static function obtieneAlumno($curso){

        $dni = self::obtieneDNIs($curso);

            $select = "select * from usuarios  where DNI in'" . $dni . "'";
            $resultado = self::ejecutaConsulta($select);
            $lista = array();

            if ($resultado) {
                $fila = $resultado->fetch_array();
                while ($fila != null) {
                    $lista[] = $fila;
                    $fila = $resultado->fetch_array();
                }
            }
            return $lista;
        }

    public static function obtieneUsuario($usu,$pass){
        $tipoUsu="";
        $select = "select TIPO_USU from usuarios where NOMBRE='".$usu."' and PASSWORD='".$pass."'";
        $resultado = self::ejecutaConsulta($select);
        if ($resultado) {
        
            $tipoUsu = $resultado->fetch_array();
            
        }
        return $tipoUsu[0];
    }




}
?>