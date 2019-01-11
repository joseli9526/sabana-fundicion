<?php
include ('../../sabana.class.php');

$web = new Crud_Familia();
$web->conexion();

$nombre = $_POST['familia'];

$sql = "SELECT id FROM familia WHERE familia = '$nombre'";
$data = $web->fetchAll($sql);

if ($data[0]['id'] == '') { //no existe
    $web->insertData($nombre);
    echo 'bien';
} else { //ya existe
    echo 'error';
}