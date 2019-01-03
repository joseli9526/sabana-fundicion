<?php
include ('configs/configuration.php');
require_once ('lib/smarty/Smarty.class.php');
session_start();

class Sabana {
    /**
     * @var PDO
     */
    var $conn = null;

    function conexion(){
        try{
            $this->conn = new PDO(DB_ENGINE.':host='.DB_IP.';dbname='.DB_NAME,DB_USER,DB_PASS);
        }catch (PDOException $exception){
            print $exception->getMessage()."<br>";
        }
    }

    function getAll($query){
        $datos = array();
        foreach ($this->conn->query($query) as $fila)
            array_push($datos,$fila);
        return $datos;
    }

    function fetchAll($query){
        $statement = $this->conn->Prepare($query);
        $statement->Execute();
        $datos = $statement->FetchAll(PDO::FETCH_ASSOC);
        return $datos;
    }

    function ejecutar($query){
        $statement = $this->conn->Prepare($query);
        $statement->Execute();
    }

    function templateEngine(){
        $smarty = new Smarty();
        $smarty->setTemplateDir(TEMPLATE);
        $smarty->setCompileDir(TEMPLATE_C);
        $smarty->setConfigDir(CONFIGS);
        $smarty->setCacheDir(CACHE);
        return $smarty;
    }
}

include ('controllers/LoginController.php');
include ('controllers/peticiones/crud.php');
include ('controllers/peticiones/usuarios.php');
include ('controllers/modelos/crud_modelos.php');
include ('controllers/familias/crud_familia.php');
include ('controllers/hojas_inspeccion/crud_hojas_inspeccion.php');

$web = new Sabana();
$web->conexion();
$templates = $web->templateEngine();