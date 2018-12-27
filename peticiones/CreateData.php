<?php
include ('../sabana.class.php');

$web = new CRUD;
$web->conexion();

$data = $web->createData();
echo json_encode($data);