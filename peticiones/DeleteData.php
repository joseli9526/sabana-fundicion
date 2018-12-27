<?php
include ('../sabana.class.php');

$web = new CRUD;
$web->conexion();

$id_s = $_POST['id'];

$data_id_array = explode(",", $id_s);

if(!empty($data_id_array)) {
    foreach($data_id_array as $id) {
        $web->deleteData($id);
    }
}