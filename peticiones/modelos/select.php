<?php
include ('../../sabana.class.php');

$web = new Crud_Modelos;

$web->conexion();

if( isset($_GET['id'])){
    $id = $_GET['id'];
    $data = $web->getModelos($id);
    echo json_encode($data);
} else {
    $data = $web->getData();
    echo json_encode($data);
}