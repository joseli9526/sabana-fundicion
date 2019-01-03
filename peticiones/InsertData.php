<?php
//date_default_timezone_set('	America/Mexico_City');
include ('../sabana.class.php');

$dias = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
$meses = ['','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

$web = new CRUD;
$web->conexion();

$usuario = $_SESSION['username'];
$fecha = date('Y-m-d');
$dia = $dias[date('w')];
$semana = date('W');
$mes = $meses[date('n')];
$anio = date('Y');
$hora = date('H:i:s');
$turno = '';

if ($hora >= '06:00:00' && $hora < '14:30:00')
    $turno = '1ero';
else if($hora >= '14:30:00' && $hora <= '21:29:59')
    $turno = '2do';
else if ($hora >= '21:30:00' && $hora <= '23:59:59')
    $turno = '3ero';
else if ($hora >= '00:00:00' && $hora < '05:59:59')
    $turno = '3ero';

if ($_POST['opcion'] == 'metalurgico') {
    $olla = $_POST['olla'];
    $familia = $_POST['familia'];
    $modelo = $_POST['modelos'];
    $cavidad = $_POST['cavidad'];
    $dureza = $_POST['dureza'];
    $dureza_max = $_POST['dureza_min'];
    $nodularidad = $_POST['nodularidad'];
    $nod = $_POST['nod'];
    $perlita = $_POST['perlita'];
    $ferrita = $_POST['ferrita'];
    $carburo = $_POST['carburos'];
    $grafito = $_POST['grafito'];
    $tamanio_grafito = $_POST['grafitotamanio'];
    $tamanio_grafito_min = $_POST['grafitotamaniomin'];
    $esteadita = $_POST['esteadita'];
    $hoja = $_POST['hoja'];

    $sql = "INSERT INTO sabana (fecha,turno,no_olla,familia,modelo,cavidad,dureza_min,dureza_max,
                    nodularidad,nod,perlita,ferrita,carburos,grafito_tipo,grafito_tamanio,grafito_tamanio_max,
                    esteadita,usuario_metalurgico,dia,semana,mes,anio,hoja_inspeccion,status) VALUES ('$fecha','$turno',$olla,'$familia','$modelo','$cavidad','$dureza',
                                                           '$dureza_max','$nodularidad','$nod','$perlita','$ferrita','$carburo',
                                                           '$grafito','$tamanio_grafito_min','$tamanio_grafito','$esteadita','$usuario',
                                                           '$dia','$semana','$mes','$anio','$hoja',2)";
    $web->ejecutar($sql);

    //echo $sql; die();
    //$ultimo_id = $web->fetchAll("SELECT MAX(id) as id FROM sabana");
    //echo json_encode($ultimo_id);
} else if ($_POST['opcion'] == 'quimico') {

    $olla = $_POST['olla'];
    $familia = $_POST['familia'];
    $modelo = $_POST['modelos'];
    $si = $_POST['si'];
    $mn = $_POST['mn'];
    $p = $_POST['p'];
    $mg = $_POST['mg'];
    $cr = $_POST['cr'];
    $ni = $_POST['ni'];
    $mo = $_POST['mo'];
    $cu = $_POST['cu'];
    $al = $_POST['al'];
    $ti = $_POST['ti'];
    $v = $_POST['v'];
    $sn = $_POST['sn'];
    $pb = $_POST['pb'];
    $c = $_POST['c'];
    $s = $_POST['s'];
    $hoja = $_POST['hoja'];

    $sql = "INSERT INTO sabana (fecha,turno,no_olla,familia,modelo,porcentaje_si,porcentaje_mn,porcentaje_p,porcentaje_mg,porcentaje_cr,
                    porcentaje_ni,porcentaje_mo,porcentaje_cu,porcentaje_al,porcentaje_ti,porcentaje_v,porcentaje_sn,porcentaje_pb,
                    porcentaje_c,porcentaje_s,usuario_quimico,dia,semana,mes,anio,hoja_inspeccion,status) VALUES ('$fecha','$turno','$olla',
                    '$familia','$modelo',$si,$mn,$p,$mg,$cr,$ni,$mo,$cu,$al,$ti,$v,$sn,$pb,$c,$s,'$usuario','$dia','$semana','$mes','$anio','$hoja',2)";

    $web->ejecutar($sql);
} else if ($_POST['opcion'] == 'temperatura') {
    $olla = $_POST['olla'];
    $familia = $_POST['familia'];
    $modelo = $_POST['modelos'];
    $sangrado = $_POST['sangrado'];
    $vaciado = $_POST['vaciado'];
    $kg = $_POST['kg'];
    $tiempo = $_POST['tiempo'];
    $hoja = $_POST['hoja'];

    $sql = "INSERT INTO sabana (fecha,turno,no_olla,familia,modelo,sangrado,vaciado,kg,tiempo,usuario_temperatura,dia,semana,mes,anio,hoja_inspeccion,status)
                                VALUES ('$fecha','$turno','$olla','$familia','$modelo',$sangrado,$vaciado,$kg,$tiempo,'$usuario',
                                        '$dia','$semana','$mes','$anio','$hoja',2)";

    $web->ejecutar($sql);
}