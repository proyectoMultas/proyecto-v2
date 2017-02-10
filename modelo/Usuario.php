<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 10/02/2017
 * Time: 12:57
 */
class Usuario {

    protected $dni;
    protected $nombre;
    protected $telefono;
    protected $password;
    protected $tipo_usu;
    protected $nombreImagen;

    public function getdni() {return $this->dni; }
    public function getnombre() {return $this->nombre; }
    public function getTlf() {return $this->telefono; }
    public function getpass() {return $this->password; }
    public function getTipoUsu() {return $this->tipo_usu; }
    public function getimagen() {return $this->nombreImagen; }



    public function __construct($row) {
        $this->dni = $row['DNI'];
        $this->nombre = $row['NOMBRE'];
        $this->telefono = $row['TELEFONO'];
        $this->password = $row['PASSWORD'];
        $this->tipo_usu = $row['TIPO_USU'];
        $this->nombreImagen = $row['nombreImagen'];


    }
}
