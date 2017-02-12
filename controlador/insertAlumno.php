<?php
include('../vista/nuevoAlum.php');
require_once ('../modelo/cicloDB.php');

$direccion='../vista/imagenes';

if ($_FILES['uploadfile']['error'] != UPLOAD_ERR_OK)
{
    switch ($_FILES['uploadfile']['error']) {
        case UPLOAD_ERR_INI_SIZE:
            die('The uploaded file exceeds the upload_max_filesize directive ' .
                'in php.ini.');
            break;
        case UPLOAD_ERR_FORM_SIZE:
            die('The uploaded file exceeds the MAX_FILE_SIZE directive that ' .
                'was specified in the HTML form.');
            break;
        case UPLOAD_ERR_PARTIAL:
            die('The uploaded file was only partially uploaded.');
            break;
        case UPLOAD_ERR_NO_FILE:
            die('No file was uploaded.');
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            die('The server is missing a temporary folder.');
            break;
        case UPLOAD_ERR_CANT_WRITE:
            die('The server failed to write the uploaded file to disk.');
            break;
        case UPLOAD_ERR_EXTENSION:
            die('File upload stopped by extension.');
            break;
    }
}

//get info about the image being uploaded
list($width, $height, $type, $attr) =
    getimagesize($_FILES['uploadfile']['tmp_name']);

// make sure the uploaded file is really a supported image
$error = 'The file you uploaded was not a supported filetype.';
switch ($type) {
    case IMAGETYPE_GIF:
        $image = imagecreatefromgif($_FILES['uploadfile']['tmp_name']) or
        die($error);
        break;
    case IMAGETYPE_JPEG:
        $image = imagecreatefromjpeg($_FILES['uploadfile']['tmp_name']) or
        die($error);
        break;
    case IMAGETYPE_PNG:
        $image = imagecreatefrompng($_FILES['uploadfile']['tmp_name']) or
        die($error);
        break;
    default:
        die($error);
}




$ruta = $_FILES['uploadfile']['name'];
$extension = pathinfo($ruta, PATHINFO_EXTENSION);
$nomImg = $_POST['dni'].'.'.$extension;
if($_POST['dni']=='' || $_POST['nombre']==''|| $_POST['telf']==''||$_POST['pass']==''){
    echo "No puede haber campos vacio";
}else {
    $insert = cicloDB::insertarUsuario($_POST['dni'], $_POST['nombre'], $_POST['telf'], $_POST['pass'], "L", $nomImg);


    imagejpeg($image, $direccion . '/' . $nomImg);

    if ($insert) {
        echo "Alumno insertado";
    } else {
        echo "El alumno ya existe";
    }
}