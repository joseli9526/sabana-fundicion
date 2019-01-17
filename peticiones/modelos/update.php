<?php
include ('../../sabana.class.php');

$web = new Crud_Modelos;
$web->conexion();

$familia = $_POST['familia'];
$modelo = $_POST['modelo'];

$nombre_archivo = $_FILES['file']['name'];

$uploaddir = 'C:\xampp2\htdocs\Arbomex\Celaya\SabanaFundicionCambios2\filespdf\\';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
$nombre_archivo =  basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    $sql = "INSERT INTO hoja_inspeccion (id, hoja_inspeccion) VALUES (NULL, '$nombre_archivo')";
    $web->ejecutar($sql);
} else {
    echo "Upload failed";
}

$sql = "SELECT MAX(id) as id FROM hoja_inspeccion";
$data = $web->fetchAll($sql);

$ultimo_id = $data[0]['id'];

$sql = "UPDATE MODELOS SET id_hoja_inspeccion = " . $ultimo_id . " WHERE modelos = '$modelo'";
$web->ejecutar($sql);