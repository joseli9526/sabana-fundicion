<?php
include ('../../sabana.class.php');

$web = new crud_hojas_inspeccion;
$web->conexion();

$hoja = $_FILES['file']['name'];
$hoja_arr = explode('.',$hoja);
$nombre_hoja = $hoja_arr[0];
$id_modelo = $_POST['id'];
$uploaddir = 'C:\xampp2\htdocs\Arbomex\Celaya\SabanaFundicionCambios2\filespdf\\';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);

$web->insertData($nombre_hoja,$id_modelo);