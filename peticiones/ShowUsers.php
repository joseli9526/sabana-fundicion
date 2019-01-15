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
    0 =>'nombre',
    1 => 'usuario',
    2=> 'correo',
    3=> '',
    4=> '',
);

// getting total number records without any search
$sql = "SELECT * ";
$sql.=" FROM users";
$query=mysqli_query($conn, $sql);
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

$sql = "SELECT * ";
$sql.=" FROM users WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
    $sql.=" AND ( name LIKE '".$requestData['search']['value']."%') ";
    //$sql.=" OR familia LIKE '".$requestData['search']['value']."%' )";
    //$sql.=" OR employee_age LIKE '".$requestData['search']['value']."%' )";
}
$query=mysqli_query($conn, $sql);
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.
$sql.=" ORDER BY id desc LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
//$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length. */
$query=mysqli_query($conn, $sql);

$response = array();

$i = 0;

while( $datum = mysqli_fetch_array($query) ) {  // preparing an array

    $data_aux = array();
    $data_aux[] = $datum['name'];
    $data_aux[] = $datum['user'];
    $data_aux[] = $datum['email'];
    $data_aux[] = '<button class="btn btn-danger btn-circle" title="Eliminar" onclick="eliminarUsuario('.$datum['id'].')"><i class="far fa-trash-alt"></i></button>';
    $data_aux[] = '<button class="btn btn-primary btn-circle" title="Reset contraseña" onclick="resetPassword('.$datum['id'].')"><i class="fas fa-unlock"></i></i></button>';
    $response[] = $data_aux;
}

$json_data = array(
    "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
    "recordsTotal"    => intval( $totalData ),  // total number of records
    "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
    "data"            => $response   // total data array
);

echo json_encode($json_data);  // send data as json format