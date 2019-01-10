<?php
include ('../../sabana.class.php');

$web = new CRUD;
$web->conexion();

$sangrado = $_POST['inputSangrado'];
$vaciado = $_POST['inputVaciado'];
$kg = $_POST['inputKg'];
$tiempo = $_POST['inputTiempo'];
$id = $_POST['id3'];
$usuario = $_SESSION['user'];

$web->updateTemperaturaInoculante($id,$sangrado,$vaciado,$kg,$tiempo,$usuario);

$sql = "SELECT dureza_min,dureza_max,nodularidad,nod,perlita,ferrita,carburos,grafito_tipo, grafito_tamanio,grafito_tamanio_max,
       esteadita, porcentaje_si,porcentaje_mn,porcentaje_p,porcentaje_mg,porcentaje_cr,porcentaje_ni,porcentaje_mo,porcentaje_cu,
       porcentaje_al,porcentaje_ti,porcentaje_v,porcentaje_sn,porcentaje_pb,porcentaje_c,porcentaje_s,sangrado,vaciado,kg,tiempo 
FROM sabana WHERE id = $id";

$datos = $web->getAll($sql);

$contador = 0;

for ($i = 0; $i < sizeof($datos[0])/2; $i++)
    if ($datos[0][$i] == '')
        $contador++;

if ($contador == 0) {
    $sql = "UPDATE sabana SET status = 1 WHERE id = $id";
    $web->ejecutar($sql);
}