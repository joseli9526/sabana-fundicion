<?php
include ('../../sabana.class.php');

$web = new CRUD;
$web->conexion();

//recuperar valores de la peticion
print_r($_POST);
$si = $_POST['inputSi'];
$mn = $_POST['inputMn'];
$p = $_POST['inputP'];
$mg = $_POST['inputMg'];
$cr = $_POST['inputCr'];
$ni = $_POST['inputNi'];
$mo = $_POST['inputMo'];
$cu = $_POST['inputCu'];
$al = $_POST['inputAl'];
$ti = $_POST['inputTi'];
$v = $_POST['inputV'];
$sn = $_POST['inputSn'];
$pb = $_POST['inputPb'];
$c = $_POST['inputC'];
$s = $_POST['inputS'];
$id = $_POST['id2'];
$usuario = $_SESSION['user'];

$web->updateQuimico($id,$si,$mn,$p,$mg,$cr,$ni,$mo,$cu,$al,$ti,$v,$sn,$pb,$c,$s,$usuario);

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