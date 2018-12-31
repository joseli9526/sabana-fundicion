<?php
include ('../sabana.class.php');

$web = new Usuarios;
$web->conexion();

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

if ($_POST['accion'] == 'contrasena') {
    $password = $_POST['password'];
    $web->uodatePassword($_SESSION['correo'],$password);
} else
    $web->createUser($nombre,$correo);