<?php
include ('../sabana.class.php');

$web = new CRUD;
$web->conexion();
$web_modelos = new Crud_Modelos;
$web_modelos->conexion();
$web_familia = new Crud_Familia;
$web_familia->conexion();
$web_hojas = new crud_hojas_inspeccion;
$web_hojas->conexion();

$comboTurno = "";
$comboModelos = "";
$comboGrafito = "";
$comboFamilia = "";
$comboHojas = "";

$response = array();;
$data = $web->readData();
$dataModelos = $web_modelos->getData();
$dataFamilias = $web_familia->getData();
$dataHojas = $web_hojas->getData();

foreach ($data as $datum){
    $data_aux = array();
    $id = "id_".$datum['id'];
    $turno = $datum['turno'];
    $grafitoTipo = $datum['grafito_tipo'];
    $id_delete = $datum['id'];

    $no_olla =  ($datum['no_olla'] == "") ? "0" : $datum['no_olla'];
    $cavidad = ($datum['cavidad'] == "") ? "0" : $datum['cavidad'];
    $dureza_min = ($datum['dureza_min'] == "") ? "0" : $datum['dureza_min'];
    $dureza_max = ($datum['dureza_max'] == "") ? "0" : $datum['dureza_max'];
    $nodularidad = ($datum['nodularidad'] == "") ? "0" : $datum['nodularidad'];
    $nod = ($datum['nod'] == "") ? "0" : $datum['nod'];
    $perlita = ($datum['perlita'] == "") ? "0" : $datum['perlita'];
    $ferrita = ($datum['ferrita'] == "") ? "0" : $datum['ferrita'];
    $carburos = ($datum['carburos'] == "") ? "0": $datum['carburos'];
    $grafito_min = ($datum['grafito_tamanio'] == "") ? "0" : $datum['grafito_tamanio'];
    $grafito_max = ($datum['grafito_tamanio_max'] == "") ? "0" : $datum['grafito_tamanio_max'];
    $esteadita = ($datum['esteadita'] == "") ? "0" : $datum['esteadita'];
    $pocentaje_si = ($datum['porcentaje_si'] == "") ? "0" : $datum['porcentaje_si'];
    $pocentaje_mn = ($datum['porcentaje_mn'] == "") ? "0" : $datum['porcentaje_mn'];
    $pocentaje_p = ($datum['porcentaje_p'] == "") ? "0" : $datum['porcentaje_p'];
    $pocentaje_mg = ($datum['porcentaje_mg'] == "") ? "0" : $datum['porcentaje_mg'];
    $pocentaje_cr = ($datum['porcentaje_cr'] == "") ? "0" : $datum['porcentaje_cr'];
    $porcentaje_ni = ($datum['porcentaje_ni'] == "") ? "0" : $datum['porcentaje_ni'];
    $porcentaje_mo = ($datum['porcentaje_mo'] == "") ? "0" : $datum['porcentaje_mo'];
    $porcentaje_cu = ($datum['porcentaje_cu'] == "") ? "0" : $datum['porcentaje_cu'];
    $porcentaje_al = ($datum['porcentaje_al'] == "") ? "0" : $datum['porcentaje_al'];
    $porcentaje_ti = ($datum['porcentaje_ti'] == "") ? "0" : $datum['porcentaje_ti'];
    $porcentaje_v = ($datum['porcentaje_v'] == "") ? "0" : $datum['porcentaje_v'];
    $porcentaje_sn = ($datum['porcentaje_sn'] == "") ? "0" : $datum['porcentaje_sn'];
    $porcentaje_pb = ($datum['porcentaje_pb'] == "") ? "0" : $datum['porcentaje_pb'];
    $porcentaje_c = ($datum['porcentaje_c'] == "") ? "0" : $datum['porcentaje_c'];
    $porcentaje_s = ($datum['porcentaje_s'] == "") ? "0" : $datum['porcentaje_s'];
    $sangrado = ($datum['sangrado'] == "") ? "0" : $datum['sangrado'];
    $vaciado = ($datum['vaciado'] == "") ? "0" : $datum['vaciado'];
    $kg = ($datum['kg'] == "") ? "0" : $datum['kg'];
    $tiempo = ($datum['tiempo'] == "") ? "0" : $datum['tiempo'];

    $comboFamilia = "<select style='border: 0' class='familia$id' onchange='updateDataCombo(this,39)'> ";
    foreach($dataFamilias as $familia){
        if ($datum['familia'] == $familia['familia'])
            $comboFamilia  .= "<option selected>".$familia['familia']."</option>";
        else
            $comboFamilia  .= "<option>".$familia['familia']."</option>";
    }
    $comboFamilia .= "</select>";

    $comboModelos = "<select style='border: 0; width: 147px' class='model$id' onchange='updateDataCombo(this,4)'> ";

    $dataModelos = $web_modelos->getModeloFamilia($datum['familia']);
    foreach ($dataModelos as $modelo){
        if ($datum['modelo'] == $modelo['modelo'])
            $comboModelos  .= "<option selected>".$modelo['modelo']."</option>";
        else
            $comboModelos  .= "<option>".$modelo['modelo']."</option>";
    }
    $comboModelos .= "</select>";

    $dataHojas = $web_hojas->getDataModelo($datum['modelo']);
    $comboHojas = "<select style='border:0' class='hoja$id' onchange='updateDataCombo(this,38)'>";
    foreach ($dataHojas as $hoja){

        if ($datum['hoja_inspeccion'] == $hoja['hoja_inspeccion'])
            $comboHojas .= "<option selected >".$hoja['hoja_inspeccion']."</option>";
        else
            $comboHojas .= "<option>".$hoja['hoja_inspeccion']."</option>";
    }
    $comboHojas .= "</select>";

    switch ($grafitoTipo){
        case 'a+b':case'':
            $comboGrafito = "<select style='border: 0;' class='$id' onchange='updateDataCombo(this,12)'>
                       <option selected>a+b</option>
                       <option>IYII</option>
            </select>";
            break;
        case 'IYII':
            $comboGrafito = "<select style='border: 0;' class='$id' onchange='updateDataCombo(this,12)'>
                       <option>a+b</option>
                       <option selected>IYII</option>
            </select>";
    }

    $data_aux[] = "<div style='width: 10px; text-align: center'><button onclick='deleteData($id_delete)' class='la la-trash'></button></div>";
    $data_aux[] = "<div style='margin-left: 40px; width: 10px; background: #0A246A; color: transparent'>d</div>";
    $data_aux[] = "<div style='width: 100px;  color: black'>". $datum['id']. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,1);' style='width: 100px;border-bottom: 1px solid #6b6f80; color: black'>". $datum['fecha']. "</div>";
    $data_aux[] = "<div style='border-bottom: 1px solid #6b6f80;  color: black'>"
                    .$turno."</div>";
    $data_aux[] = "<div class='$id' readonly='true' ondblclick='habilitarDiv(this)' onblur='updateData(this,3);' style='border-bottom: 1px solid #6b6f80;  color: black'>".  $no_olla ."</div>";
    $data_aux[] = "<div style='border-bottom: 1px solid #6b6f80;'>"
        .$comboFamilia."</div>";
    $data_aux[] = "<div style='border-bottom: 1px solid #6b6f80;'>
                   ".$comboModelos."
                  </div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,5);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80;  color: black'>". $cavidad . "</div>";
    $data_aux[] = "<div class='container' style='width: 190px;'><div class='row'><div class='$id col-5' onblur='updateData(this,6);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80;  color: black'>". $dureza_min . "</div>" . "<span>/</span><div class='$id col-5' onblur='updateData(this,40);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80;  color: black'>".$dureza_max. "</div></div></div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,7);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80;  color: black'>". $nodularidad . "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,8);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80;  color: black'>". $nod. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,9);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80;  color: black'>". $perlita. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,10);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>".$ferrita. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,11);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $carburos. "</div>";
    $data_aux[] = "<div style='border-bottom: 1px solid #6b6f80;'>
                    ".$comboGrafito."
                   </div>";
    $data_aux[] = "<div class='container' style='width: 200px'><div class='row'><div class='$id col-5' onblur='updateData(this,13);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $grafito_min. "</div>" . "<span>+</span><div class='$id col-5' onblur='updateData(this,41);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $grafito_max. "</div></div></div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,14);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $esteadita. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,15);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $pocentaje_si. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,16);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $pocentaje_mn. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,17);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $pocentaje_p. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,18);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $pocentaje_mg. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,19);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $pocentaje_cr. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,20);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $porcentaje_ni. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,21);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $porcentaje_mo. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,22);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $porcentaje_cu. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,23);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $porcentaje_al. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,24);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $porcentaje_ti. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,25);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $porcentaje_v. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,26);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $porcentaje_sn. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,27);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $porcentaje_pb. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,28);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $porcentaje_c. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,29);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $porcentaje_s. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,30);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $sangrado. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,31);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $vaciado. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,32);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $kg. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,33);' readonly='true' ondblclick='habilitarDiv(this)' style='border-bottom: 1px solid #6b6f80; color: black'>". $tiempo. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,34);' style='border-bottom: 1px solid #6b6f80; color: black'>". $datum['dia']. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,35);' style='border-bottom: 1px solid #6b6f80; color: black'>". $datum['semana']. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,36);' style='border-bottom: 1px solid #6b6f80; color: black'>". $datum['mes']. "</div>";
    $data_aux[] = "<div class='$id' onblur='updateData(this,37);' style='border-bottom: 1px solid #6b6f80; color: black'>". $datum['anio']. "</div>";
    $data_aux[] = "<div style='border-bottom: 1px solid #6b6f80;'>".$comboHojas."</div>";
    $data_aux[] = "<div style='border-bottom: 1px solid #6b6f80;  color: black'>". $datum['usuario']. "</div>";

    $response[] = $data_aux;
}

$json_dat = array("data" => $response);
echo json_encode($json_dat);