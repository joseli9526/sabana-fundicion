<?php
include ('../../sabana.class.php');

$web = new CRUD;
$web->conexion();

$id = $_POST['id'];
$pass = $_POST['pass'];

$sql = "UPDATE users SET password = md5('$pass') WHERE id = ".$id ;
echo $sql;
$web->ejecutar($sql);