<?php
include ('../../sabana.class.php');

$web = new crud_hojas_inspeccion;
$web->conexion();

$modelo = $_GET['modelo'];

$data = $web->getDataModelo($modelo);

echo json_encode($data);