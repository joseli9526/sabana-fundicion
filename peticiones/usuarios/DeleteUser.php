<?php
include ('../../sabana.class.php');

$web = new CRUD;
$web->conexion();

$id = $_POST['id'];

$sql = "DELETE FROM users WHERE id = " . $id;
$web->ejecutar($sql);