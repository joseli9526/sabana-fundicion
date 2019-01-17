<?php
include ('../../sabana.class.php');

$web = new Usuarios;
$web->conexion();

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = ". $id;
$data = $web->fetchAll($sql);

echo json_encode($data);