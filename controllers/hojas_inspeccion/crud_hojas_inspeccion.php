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

    function insertData($hoja,$id_modelo) {
        $sql = "INSERT INTO hoja_inspeccion (id, hoja_inspeccion) VALUES (null,'$hoja')";
        $this->ejecutar($sql);

        $sql = "SELECT MAX(id) as id FROM hoja_inspeccion";
        $data = $this->fetchAll($sql);
        $id_hoja = $data[0]['id'];

        $sql = "UPDATE modelos SET id_hoja_inspeccion = $id_hoja WHERE id = $id_modelo";
        $this->ejecutar($sql);
    }

    function deleteData($id) {
        $sql = "UPDATE modelos set id_hoja_inspeccion = null WHERE id_hoja_inspeccion = " . $id;
        $this->ejecutar($sql);
        $sql = "DELETE FROM hoja_inspeccion WHERE id = " . $id;
        $this->ejecutar($sql);
    }
}