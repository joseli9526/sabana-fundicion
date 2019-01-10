<?php
include ('../../sabana.class.php');

$web = new Crud_Modelos;
$web->conexion();

print_r($_FILES);
$uploaddir = 'C:\xampp2\htdocs\Arbomex\Celaya\SabanaFundicionCambios2\filespdf\\';
$uploadfile = $uploaddir . basename($_FILES['archivoaddmodelo']['name']);

echo "<p>";

if (move_uploaded_file($_FILES['archivoaddmodelo']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Upload failed";
}