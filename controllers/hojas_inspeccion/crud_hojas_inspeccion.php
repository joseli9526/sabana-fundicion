<?php

class crud_hojas_inspeccion extends Sabana {

    function getData(){
        $sql = "SELECT * FROM hoja_inspeccion";
        return $this->fetchAll($sql);
    }

    function getDataModelo($modelo){
        $sql = "select hoja_inspeccion from hoja_inspeccion inner join modelos 
                on hoja_inspeccion.id = modelos.id_hoja_inspeccion where modelos.modelo = '$modelo'";
        return $this->fetchAll($sql);
    }
}