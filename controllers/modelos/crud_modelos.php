<?php

class Crud_Modelos extends Sabana {

    function getData(){
        $sql = "SELECT * FROM modelos";
        return $this->fetchAll($sql);
    }

    function getModelos($id){
        $sql = "SELECT * FROM modelos WHERE id_familia = " .$id;
        return $this->fetchAll($sql);
    }

    function getModeloFamilia($familia){
        $sql = "SELECT modelo FROM modelos INNER JOIN familia ON modelos.id_familia = familia.id WHERE familia.familia ='$familia'";
        return $this->fetchAll($sql);
    }

    function insertData($modelo,$id_familia) {
        $sql = "INSERT INTO modelos (id,modelo,id_familia) VALUES (null,'$modelo',$id_familia)";
        $this->ejecutar($sql);
    }

    function insertDataFile($modelo,$id_familia,$file) {
        $sql = "INSERT INTO hoja_inspeccion (id, hoja_inspeccion) VALUES (null,'$file')";
        $this->ejecutar($sql);

        $sql = "SELECT MAX(id) as id FROM hoja_inspeccion";
        $ultimo_id = $this->fetchAll($sql);
        $ultimo_id = $ultimo_id[0]['id'];

        $sql = "INSERT INTO modelos (id,modelo,id_familia,id_hoja_inspeccion) VALUES (null,'$modelo',$id_familia,$ultimo_id)";
        $this->ejecutar($sql);
    }

    function deleteData($id) {
        $sql = "DELETE FROM modelos WHERE id = " . $id;
        $this->ejecutar($sql);
    }
}