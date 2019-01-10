<?php
include ('../sabana.class.php');

$web = new CRUD;
$web->conexion();

$sql = "SELECT id,name,email,user FROM users";

$data = $web->fetchAll($sql);

$response = array();
foreach ($data as $dato) {
    $data_aux = array();
    $data_aux[] = $dato['name'];
    $data_aux[] = $dato['user'];
    $data_aux[] = $dato['email'];
    $data_aux[] = '<button class="btn btn-danger btn-circle" title="Eliminar" onclick="eliminarUsuario('.$dato['id'].')"><i class="far fa-trash-alt"></i></button>';
    $data_aux[] = '<button class="btn btn-primary btn-circle" title="Reset contraseña" onclick="resetPassword('.$dato['id'].')"><i class="fas fa-unlock"></i></i></button>';
    $response[] = $data_aux;
    //print_r($dato);
}

$json_data = array(
    "data"            => $response   // total data array
);

echo json_encode($json_data);