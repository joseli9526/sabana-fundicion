<?php
include ('../../sabana.class.php');

$web = new CRUD;
$web->conexion();

$sangrado = $_POST['inputSangrado'];
$vaciado = $_POST['inputVaciado'];
$kg = $_POST['inputKg'];
$tiempo = $_POST['inputTiempo'];
$id = $_POST['id3'];
$usuario = $_SESSION['username'];

$web->updateTemperaturaInoculante($id,$sangrado,$vaciado,$kg,$tiempo,$usuario);