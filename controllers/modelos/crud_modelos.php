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
}