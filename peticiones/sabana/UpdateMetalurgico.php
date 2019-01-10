<?php
include ('../../sabana.class.php');

$web = new CRUD;
$web->conexion();

//recuperar valores de la peticion
$id = $_POST['id1'];
$olla = $_POST['inputOlla'];
$cavidad = $_POST['inputCavidad'];
$dureza_min = $_POST['inputDurezaMin'];
$dureza_max = $_POST['inputDurezaMax'];
$nodularidad = $_POST['inputNodularidad'];
$nod = $_POST['inputNod'];
$perlita = $_POST['inputPerlita'];
$ferrita = $_POST['inputFerrita'];
$carburos = $_POST['inputCarburos'];
$tipo_grafito = $_POST['inputTipoGrafito'];
$grafitoMin = $_POST['inputGrafitoMin'];
$grafitoMax = $_POST['inputGrafitoMax'];
$esteadita = $_POST['inputEsteadita'];
$familia = $_POST['selectFamilia'];
$modelo = $_POST['selectModelo'];
$usuario = $_SESSION['user'];

$web->updateMetalurgico($id,$olla,$familia,$modelo,$cavidad,$dureza_min,$dureza_max,$nodularidad,$nod,$perlita,$ferrita,$carburos,$tipo_grafito,$grafitoMin,$grafitoMax,$esteadita,$usuario);

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