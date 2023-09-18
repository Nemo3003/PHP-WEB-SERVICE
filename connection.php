<?php
class Connection extends PDO {
    private $hostDb = 'localhost';
    private $nameDb = 'php_practice';
    private $usuarioDb = 'root';
    private $passwordDb = '';


    public function __construct(){
        try{
            parent::__construct('mysql:host=' . $this->hostDb . ';dbname=' . $this->nameDb . ';charset=utf8', $this->usuarioDb, $this->passwordDb, 
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            exit;
        }
    }
}

?>