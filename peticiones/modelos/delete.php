<?php
include ('../../sabana.class.php');

$web = new Crud_Modelos;
$web->conexion();

$id = $_POST['id'];
$web->deleteData($id);