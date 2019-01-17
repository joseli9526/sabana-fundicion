<?php
include ('../../sabana.class.php');

$web = new Usuarios;
$web->conexion();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$rol = $_POST['rol'];

$sql = "UPDATE users SET name = '$nombre', user = '$usuario', apellido = '$apellido', email = '$correo', rol = '$rol' WHERE id = " . $id;
$web->ejecutar($sql);