<?php
/**
 * Created by PhpStorm.
 * User: Caique
 * Date: 25/02/2018
 * Time: 16:50
 */

class Conexao{
    private $db;

    public function __construct(){
        $this->db = pg_connect("host=localhost port=5432 dbname=Alpha7 user=postgres password=");
    }

    public function getInstance(){
        return $this->db;
    }

}

?>