<?php
include ('../../sabana.class.php');

$web = new Crud_Modelos;
$web->conexion();

$modelo = $_POST['inputaddmodeloname'];

$sql = "SELECT id FROM modelos WHERE modelo = '$modelo'";
$data = $web->fetchAll($sql);

if ($data[0]['id'] == '') { // no existe
    $id_familia = $_POST['id_familia'];

    if ($_FILES['archivoaddmodelo']['name'] == '')
        $web->insertData($modelo,$id_familia);
    else {
        $uploaddir = 'C:\xampp2\htdocs\Arbomex\Celaya\SabanaFundicionCambios2\filespdf\\';
        $uploadfile = $uploaddir . basename($_FILES['archivoaddmodelo']['name']);
        $nombre_archivo =  basename($_FILES['archivoaddmodelo']['name']);

        if (move_uploaded_file($_FILES['archivoaddmodelo']['tmp_name'], $uploadfile)) {
            $web->insertDataFile($modelo,$id_familia,$nombre_archivo);
        } else {
            echo "Upload failed";
        }
    }
} else {
    echo 'error';
}

