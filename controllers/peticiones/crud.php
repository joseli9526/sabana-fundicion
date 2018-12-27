<?php
date_default_timezone_set('America/Mexico_City');

class CRUD extends Sabana {

    function readData(){
        $sql = "SELECT * FROM sabana ORDER BY id DESC";
        return $this->fetchAll($sql);
    }

    function deleteData($id){
        $sql = "DELETE FROM sabana WHERE id = " .$id;
        $this->ejecutar($sql);
    }

    function createData(){
        $dias = ['Domingo','Lunes','Martes','Jueves','Viernes','Sabado'];
        $turno = '';
        $usuario = $_SESSION['username'];

        $hora_actual = date('H:i:s');
        if ($hora_actual >= '06:00:00' && $hora_actual < '14:30:00')
            $turno = '1ero';
        else if($hora_actual >= '14:30:00' && $hora_actual <= '21:29:59')
            $turno = '2do';
        else if ($hora_actual >= '21:30:00' && $hora_actual <= '23:59:59')
            $turno = '3ero';
        else if ($hora_actual >= '00:00:00' && $hora_actual < '05:59:59')
            $turno = '3ero';

        $fecha_actual = date('Y-m-d');
        $anio_actual = date('Y');
        $mes_actual = date('m');
        $semana_actual = date('W');
        $fecha = getdate();
        $dia_actual = $dias[$fecha['wday']];

        $sql = "INSERT INTO sabana (id,turno,modelo,grafito_tipo,familia,fecha,anio,mes,dia,semana,hoja_inspeccion,usuario) VALUES (null,'$turno','Carrier','a+b','American Axle','$fecha_actual','$anio_actual','$mes_actual','$dia_actual','$semana_actual','DHIF-053','$usuario')";
        $this->ejecutar($sql); //se inserta una fila vacia en la base de datos
        $sql = "SELECT MAX(id) as id FROM sabana";
        $data = $this->fetchAll($sql);
        $data[0]['username'] = $usuario;
        return $data; //se devuelve el ultimo id en la tabla
    }

    function updateData($campo, $valor, $id){
        $sql = "UPDATE sabana SET $campo = '$valor' WHERE id = '$id'";
        echo $sql;
        $this->ejecutar($sql);
    }

    function updateMetalurgico($id, $olla, $familia, $modelo, $cavidad, $dur_min, $dur_max, $nodularidad, $nod, $perlita, $ferrita,
             $carburos, $tipo_grafito, $grafito_min, $grafito_max, $esteadita) {

        $sql = "UPDATE sabana SET no_olla = $olla, familia = '$familia', modelo = '$modelo', cavidad = $cavidad, dureza_min = '$dur_min', dureza_max = '$dur_max',
                  nodularidad = '$nodularidad', nod = '$nod', perlita = '$perlita', ferrita = '$ferrita', carburos = '$carburos', grafito_tipo = '$tipo_grafito',
                  grafito_tamanio = '$grafito_min', grafito_tamanio_max = '$grafito_max', esteadita = '$esteadita' WHERE id = $id";
echo $sql;
        $this->ejecutar($sql);
    }

    function updateQuimico($id, $si, $mn, $p, $mg, $cr, $ni, $mo, $cu, $al, $ti, $v, $sn, $pb, $c, $s) {
        $sql = "UPDATE sabana SET porcentaje_si = $si, porcentaje_mn = $mn, porcentaje_p = $p, porcentaje_mg = $mg, porcentaje_cr = $cr,
                  porcentaje_ni = $ni, porcentaje_mo = $mo, porcentaje_cu = $cu, porcentaje_al = $al, porcentaje_ti = $ti,
                  porcentaje_v = $v, porcentaje_sn = $sn, porcentaje_pb = $pb, porcentaje_c = $c, porcentaje_s = $s WHERE id = $id";
        $this->ejecutar($sql);
    }

    function updateTemperaturaInoculante($id, $sangrado, $vaciado, $kg, $tiempo){
        $sql = "UPDATE sabana SET sangrado = $sangrado, vaciado = $vaciado, kg = $kg, tiempo = $tiempo WHERE id = $id";
        $this->ejecutar($sql);
    }
}