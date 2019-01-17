<?php
include ('../../sabana.class.php');

$web = new Crud_Familia;
$web->conexion();

$familia = $_POST['familia'];
$web->deleteData($familia);