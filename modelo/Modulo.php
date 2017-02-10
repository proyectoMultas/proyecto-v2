<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 10/02/2017
 * Time: 12:57
 */
class Modulo {

    protected $cod_modulo;
    protected $nombre;
    protected $duracion;
    

    public function getcodModulo() {return $this->cod_modulo; }
    public function getnombre() {return $this->nombre; }
    public function getduracion() {return $this->duracion; }
    


    public function __construct($row) {
        $this->cod_modulo = $row['COD_MODULO'];
        $this->nombre = $row['NOMBRE'];
        $this->duracion = $row['DURACION'];
    

    }
}