<?php
include ('../sabana.class.php');

$web = new CRUD;
$web->conexion();

$campo = $_POST['campo'];
$valor = $_POST['valor'];
$id = $_POST['id'];

$web->updateData($campo,$valor,$id);