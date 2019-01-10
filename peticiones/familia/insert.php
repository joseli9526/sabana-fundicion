<?php
include ('../../sabana.class.php');

$web = new Crud_Familia();
$web->conexion();

$nombre = $_POST['familia'];
$web->insertData($nombre);