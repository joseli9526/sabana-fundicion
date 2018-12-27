<?php
include ('../../sabana.class.php');

$web = new Crud_Familia();
$web->conexion();

$data = $web->getData();

echo json_encode($data);
