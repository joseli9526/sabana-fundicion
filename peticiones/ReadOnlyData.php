<?php
// Database connections
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sabanafundicion";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

// storing  request (ie, get/post) global array to a variable
$requestData= $_REQUEST;

$columns = array(
// datatable column index  => database column name
    0 =>'id',
    1 => 'fecha',
    2=> 'turno',
    3=> 'no_olla',
    4=> 'modelo',
    5=> 'cavidad',
    6=> 'cavidad',
    7=> 'dureza_min',
    8=> 'dureza_max',
    9=> 'nodularidad',
    10=> 'nod',
    11=> 'perlita',
    12=> 'ferrita',
    13=> 'carburos',
    14=> 'grafito_tipo',
    15=> 'grafito_tamanio',
    16=> 'grafito_tamanio_max',
    17=> 'esteadita',
    18=> 'porcentaje_si',
    19=> 'porcentaje_mn',
    20=> 'porcentaje_p',
    21=> 'porcentaje_mg',
    22=> 'porcentaje_cr',
    23=> 'porcentaje_ni',
    24=> 'porcentaje_mo',
    25=> 'porcentaje_cu',
    26=> 'porcentaje_al',
    27=> 'porcentaje_ti',
    28=> 'porcentaje_v',
    29=> 'porcentaje_sn',
    30=> 'porcentaje_pb',
    31=> 'porcentaje_c',
    32=> 'porcentaje_s',
    33=> 'sangrado',
    34=> 'vaciado',
    35=> 'kg',
    36=> 'tiempo',
    37=> 'dia',
    38=> 'semana',
    39=> 'mes',
    40=> 'anio',
    41=> 'hoja_inspeccion',
    42=> 'familia',
    43=> 'usuario',
    44=> 'status',
);

// getting total number records without any search
$sql = "SELECT * ";
$sql.=" FROM sabana";
$query=mysqli_query($conn, $sql);
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

$sql = "SELECT * ";
$sql.=" FROM sabana WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
    $sql.=" AND ( modelo LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR familia LIKE '".$requestData['search']['value']."%' )";
    //$sql.=" OR employee_age LIKE '".$requestData['search']['value']."%' )";
}
$query=mysqli_query($conn, $sql);
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.
$sql.=" ORDER BY id desc LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
//$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length. */
$query=mysqli_query($conn, $sql);

$response = array();
while( $datum=mysqli_fetch_array($query) ) {  // preparing an array
    $contador = 0;
    $data_aux = array();
    $data_aux[] = "<input type='checkbox' style='margin-top:10px' class='deleteRow' value='".$datum['id']."'/>" ;
    if ($datum['dureza_min'] == '')
        $contador++;
    if ($datum['dureza_max'] == '')
        $contador++;
    if ($datum['nodularidad'] == '')
        $contador++;
    if ($datum['nod'] == '')
        $contador++;
    if ($datum['perlita'] == '')
        $contador++;
    if ($datum['ferrita'] == '')
        $contador++;
    if ($datum['carburos'] == '')
        $contador++;
    if ($datum['grafito_tipo'] == '')
        $contador++;
    if ($datum['grafito_tamanio'] == '')
        $contador++;
    if ($datum['grafito_tamanio_max'] == '')
        $contador++;
    if ($datum['esteadita'] == '')
        $contador++;
    if ($datum['porcentaje_si'] == '')
        $contador++;
    if ($datum['porcentaje_mn'] == '')
        $contador++;
    if ($datum['porcentaje_p'] == '')
        $contador++;
    if ($datum['porcentaje_mg'] == '')
        $contador++;
    if ($datum['porcentaje_cr'] == '')
        $contador++;
    if ($datum['porcentaje_ni'] == '')
        $contador++;
    if ($datum['porcentaje_mo'] == '')
        $contador++;
    if ($datum['porcentaje_cu'] == '')
        $contador++;
    if ($datum['porcentaje_al'] == '')
        $contador++;
    if ($datum['porcentaje_ti'] == '')
        $contador++;
    if ($datum['porcentaje_v'] == '')
        $contador++;
    if ($datum['porcentaje_sn'] == '')
        $contador++;
    if ($datum['porcentaje_pb'] == '')
        $contador++;
    if ($datum['porcentaje_c'] == '')
        $contador++;
    if ($datum['porcentaje_s'] == '')
        $contador++;
    if ($datum['sangrado'] == '')
        $contador++;
    if ($datum['vaciado'] == '')
        $contador++;
    if ($datum['kg'] == '')
        $contador++;
    if ($datum['tiempo'] == '')
        $contador++;

    if ($contador == 0) {
        $data_aux[] = "<img alt='' src='../images/verde.png' width='30' height='30'>";
        $sql = "UPDATE sabana SET status = 1 WHERE id = ".$datum['id'];
        mysqli_query($conn,$sql);
    }
    else {
        $data_aux[] = "<img alt='' src='../images/amarillo.png' width='30' height='30'>";
        $sql = "UPDATE sabana SET status = 0 WHERE id = ".$datum['id'];
        mysqli_query($conn,$sql);
    }
    $data_aux[] = $datum['id'];
    $data_aux[] = $datum['fecha'];
    $data_aux[] = $datum['turno'];
    $data_aux[] = $datum['no_olla'];
    $data_aux[] = $datum['familia'];
    $data_aux[] = $datum['modelo'];
    $data_aux[] = $datum['cavidad'];
    $data_aux[] = $datum['dureza_min'];
    $data_aux[] = $datum['dureza_max'];
    $data_aux[] = $datum['nodularidad'];
    $data_aux[] = $datum['nod'];
    $data_aux[] = $datum['perlita'];
    $data_aux[] = $datum['ferrita'];
    $data_aux[] = $datum['carburos'];
    $data_aux[] = $datum['grafito_tipo'];
    $data_aux[] = $datum['grafito_tamanio'];
    $data_aux[] = $datum['grafito_tamanio_max'];
    $data_aux[] = $datum['esteadita'];
    $data_aux[] = $datum['usuario_metalurgico'];
    $data_aux[] = $datum['porcentaje_si'];
    $data_aux[] = $datum['porcentaje_mn'];
    $data_aux[] = $datum['porcentaje_p'];
    $data_aux[] = $datum['porcentaje_mg'];
    $data_aux[] = $datum['porcentaje_cr'];
    $data_aux[] = $datum['porcentaje_ni'];
    $data_aux[] = $datum['porcentaje_mo'];
    $data_aux[] = $datum['porcentaje_cu'];
    $data_aux[] = $datum['porcentaje_al'];
    $data_aux[] = $datum['porcentaje_ti'];
    $data_aux[] = $datum['porcentaje_v'];
    $data_aux[] = $datum['porcentaje_sn'];
    $data_aux[] = $datum['porcentaje_pb'];
    $data_aux[] = $datum['porcentaje_c'];
    $data_aux[] = $datum['porcentaje_s'];
    $data_aux[] = $datum['usuario_quimico'];
    $data_aux[] = $datum['sangrado'];
    $data_aux[] = $datum['vaciado'];
    $data_aux[] = $datum['kg'];
    $data_aux[] = $datum['tiempo'];
    $data_aux[] = $datum['usuario_temperatura'];
    $data_aux[] = $datum['dia'];
    $data_aux[] = $datum['semana'];
    $data_aux[] = $datum['mes'];
    $data_aux[] = $datum['anio'];
    $data_aux[] = $datum['hoja_inspeccion'];

    $response[] = $data_aux;
}

$json_data = array(
    "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
    "recordsTotal"    => intval( $totalData ),  // total number of records
    "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
    "data"            => $response   // total data array
);

echo json_encode($json_data);  // send data as json format