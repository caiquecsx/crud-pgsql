<?php
/**
 * Created by PhpStorm.
 * User: Caique
 * Date: 02/03/2018
 * Time: 10:50
 */

class LinkDAO{

    public function Select($db){
        $query = "select * from link";
        $result = pg_query($db, $query);

        while($consulta = pg_fetch_assoc($result))
        {
            echo $consulta['url'];
        }
    }

    public function Insert($db, $link, $nome){

        $query = "INSERT INTO link (url, name) VALUES ('$link', '$nome')";
        pg_query($db, $query);

    }

    public function Update($db, $url, $id){
        $query = "UPDATE link SET url = '$url' WHERE id = $id;";
        pg_query($db, $query);
    }

    public function Delete($db, $id){
        $query = "DELETE FROM link WHERE id = $id";
        pg_query($db, $query);
    }



}