<?php

class Crud_Familia extends Sabana {

    function getData(){
        $sql = "SELECT * FROM familia";
        return $this->fetchAll($sql);
    }

    function insertData($familia) {
        $sql = "INSERT INTO familia (id, familia) VALUES (null,'$familia')";
        $this->ejecutar($sql);
    }

    function deleteData($familia) {
        $sql = "DELETE FROM familia WHERE familia = '$familia'";
        $this->ejecutar($sql);
    }
}