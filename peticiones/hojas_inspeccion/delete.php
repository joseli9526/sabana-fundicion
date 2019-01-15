<?php
include ('../../sabana.class.php');

$web = new crud_hojas_inspeccion;
$web->conexion();

$id = $_POST['id'];

$web->deleteData($id);