<?php
include ('../../sabana.class.php');

$web = new CRUD;
$web->conexion();

//recuperar valores de la peticion
print_r($_POST);
$si = $_POST['inputSi'];
$mn = $_POST['inputMn'];
$p = $_POST['inputP'];
$mg = $_POST['inputMg'];
$cr = $_POST['inputCr'];
$ni = $_POST['inputNi'];
$mo = $_POST['inputMo'];
$cu = $_POST['inputCu'];
$al = $_POST['inputAl'];
$ti = $_POST['inputTi'];
$v = $_POST['inputV'];
$sn = $_POST['inputSn'];
$pb = $_POST['inputPb'];
$c = $_POST['inputC'];
$s = $_POST['inputS'];
$id = $_POST['id2'];
$usuario = $_SESSION['username'];

$web->updateQuimico($id,$si,$mn,$p,$mg,$cr,$ni,$mo,$cu,$al,$ti,$v,$sn,$pb,$c,$s,$usuario);