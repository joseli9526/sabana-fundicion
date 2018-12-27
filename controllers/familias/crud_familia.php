<?php

class Crud_Familia extends Sabana {

    function getData(){
        $sql = "SELECT * FROM familia";
        return $this->fetchAll($sql);
    }

}