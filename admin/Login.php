<?php
include ('../sabana.class.php');

$web = new LoginController;
$web->conexion();

if (isset($_POST['email']) and isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $web->login2($email,$password);
}

if (isset($_GET['action'])){
    $web->logout();
}