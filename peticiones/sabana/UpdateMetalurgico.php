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

$web->updateMetalurgico($id,$olla,$familia,$modelo,$cavidad,$dureza_min,$dureza_max,$nodularidad,$nod,$perlita,$ferrita,$carburos,$tipo_grafito,$grafitoMin,$grafitoMax,$esteadita);
