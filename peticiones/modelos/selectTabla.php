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
    0 =>'',
    1 =>'Familia',
    2 =>'Modelo',
    3 =>'Hoja Inspeccion',
);


// getting total number records without any search
$sql = "SELECT *, m.id as id_modelo ";
$sql.=" from familia f inner join modelos m
on f.id = m.id_familia inner join hoja_inspeccion h on m.id_hoja_inspeccion = h.id";
$query=mysqli_query($conn, $sql);
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

$sql = "SELECT *, m.id as id_modelo ";
$sql.=" from familia f inner join modelos m
on f.id = m.id_familia inner join hoja_inspeccion h on m.id_hoja_inspeccion = h.id WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
    $sql.=" AND ( familia LIKE '".$requestData['search']['value']."%') ";
    //$sql.=" OR familia LIKE '".$requestData['search']['value']."%' )";
    //$sql.=" OR employee_age LIKE '".$requestData['search']['value']."%' )";
}
$query=mysqli_query($conn, $sql);
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.
$sql.=" ORDER BY f.id desc LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
//$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length. */
$query=mysqli_query($conn, $sql);

$response = array();

$j = 0;
$i = 0;

while( $datum = mysqli_fetch_array($query) ) {  // preparing an array
        $data_aux = array();
        $hoja = $datum['hoja_inspeccion'];
        $data_aux[] = '<button class="btn btn-primary btn-circle" onclick="abrirModalEditarModelo(this)" title="Editar"><i class="fa fa-edit"></i></button><button style="margin-left: 5px" class="btn btn-danger btn-circle" onclick="eliminarModelo('.$datum['id_modelo'].')" title="Eliminar"><i class="fa fa-trash"></i></button>';
        $data_aux[] = $datum['familia'];
        $data_aux[] = $datum['modelo'];
        $data_aux[] = '<a href="#" onclick="abrirPDF(\''.$hoja.'\')">'.$hoja.'</a>';

//    $sql = "SELECT id,modelo FROM modelos WHERE id_familia = " .$datum['id'];

  //  $querymodelo = mysqli_query($conn,$sql);
    //$totalData += mysqli_num_rows($querymodelo);
 /*   if (mysqli_num_rows($querymodelo) > 0) {
        while ($dataModelos =  mysqli_fetch_array($querymodelo)) {

            if ($dataModelos['modelo'] == '')
                //$data_aux[] = '';
                $i++;
            else {
              //  $data_aux[] = $dataModelos['modelo'];
               // $data_aux[] = 'hoja';
                $sql = "SELECT hoja_inspeccion FROM hoja_inspeccion WHERE id = " . $dataModelos['id'];
                $queryhojas = mysqli_query($conn,$sql);
                while ($dataHojas = mysqli_fetch_array($queryhojas)) {

                    $data_aux = array();
                    $data_aux[] = '<button class="btn btn-primary btn-circle" title="Editar"><i class="fa fa-edit"></i></button><button style="margin-left: 5px" class="btn btn-danger btn-circle" title="Eliminar"><i class="fa fa-trash"></i></button>';
                    $data_aux[] = $datum['familia'];
                    $data_aux[] = $dataModelos['modelo'];
                    if ($dataModelos == '')
                        $data_aux[] = '<div class="element">
                          <form class="formsubirarchivo" enctype="multipart/form-data">
                              <i id="iconosubir_'.$i.'"  class="clip fa fa-paperclip fa-lg"></i><span style="margin-left: 10px" class="name">No se eligió archivo</span>
                              <input style="display: none" type="file" onchange="subirArchivo(this,'.$datum['id'].')" name="iconosubir_'.$i.'" id="inputsubirarchivo_'.$i.'">
                          </form>
                       </div>';
                    else
                        $data_aux[] = $dataHojas['hoja_inspeccion'];
                }
            }
            $response[] = $data_aux;
        }

        //$data_aux[] = $datum['familia'];
    } else {
        $data_aux[] = '<button class="btn btn-primary btn-circle" title="Editar"><i class="fa fa-edit"></i></button><button style="margin-left: 5px" class="btn btn-danger btn-circle" title="Eliminar"><i class="fa fa-trash"></i></button>';
        $data_aux[] = 'a';
        $data_aux[] = 'a';
        $data_aux[] = 'a';
        $response[] = $data_aux;
    }*/


  //  $i++;
    /*  $data_aux[] = $datum['modelo'];
      $data_aux[] = '<button class="btn btn-danger btn-circle" title="Eliminar" onclick="eliminarModelo('.$datum['id'].')"><i class="far fa-trash-alt"></i></button>';

      if ($id_hoja != '') {
          $sql = "SELECT id,hoja_inspeccion FROM hoja_inspeccion WHERE id = " .$id_hoja;
          $row = array();
          $query2 = mysqli_query($conn, $sql);
          if (mysqli_num_rows($query2) > 0) {
              while ($row = mysqli_fetch_array($query2)) {
                  $data_aux[] = '<label>'.$row['hoja_inspeccion'].'</label><button class="btn btn-danger btn-circle" style="margin-left: 10px" title="Eliminar" onclick="eliminarArchivo('.$row['id'].')"><i class="far fa-trash-alt"></i></button>';
              }
          } else {
              $data_aux[] = '<input type="file" class="btn btn-success btn-circle" title="Subir archivo" onclick="subirArchivo('.$datum['id'].')"><i class="fas fa-upload"></i>';
          }
      } else {
          $data_aux[] = '<div class="element">
                            <form class="formsubirarchivo" enctype="multipart/form-data">
                                <i id="iconosubir_'.$i.'"  class="clip fa fa-paperclip fa-lg"></i><span style="margin-left: 10px" class="name">No se eligió archivo</span>
                                <input style="display: none" type="file" onchange="subirArchivo(this,'.$datum['id'].')" name="iconosubir_'.$i.'" id="inputsubirarchivo_'.$i.'">
                            </form>
                         </div>';
      }
      $i++;*/
    /*$modelo = $datum['modelo'];
    $id_hoja = $datum['id_hoja_inspeccion'];
   */
    $response[] = $data_aux;
}

/*$response[count($response)-1][2].='<script>
                        $(\'i.clip\').click( function(){
            var  input = $(this).attr(\'id\');
            $(\'input[name=\'+input+\']\').trigger(\'click\');
        });
</script>';*/

$json_data = array(
    "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
    "recordsTotal"    => intval( $totalData ),  // total number of records
    "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
    "data"            => $response   // total data array
);

echo json_encode($json_data);  // send data as json format