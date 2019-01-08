<?php
include ('../sabana.class.php');

$web = new Usuarios;
$web->conexion();

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$apellido = $_POST['apellido'];
$pass = $_POST['contrasena'];
$rol = $_POST['rol'];

if ($_POST['accion'] == 'contrasena') {
    $password = $_POST['password'];
    $web->uodatePassword($_SESSION['correo'],$password);
} else
    $web->createUser($nombre,$correo,$usuario,$apellido,$pass,$rol);