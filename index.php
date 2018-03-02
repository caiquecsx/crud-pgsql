<?php
/**
 * Created by PhpStorm.
 * User: Caique
 * Date: 25/02/2018
 * Time: 16:42
 */

define("ROOT_DIR", dirname(__FILE__));
require_once ROOT_DIR . '\Util\Conexao.php';
require_once ROOT_DIR . '\DAO\LinkDAO.php';

$db = new Conexao();

$dao = new LinkDAO();

$dao->Select($db->getInstance());

//$dao->Insert($db->getInstance(),'www.oi.com', 'oi');

//$dao->Delete($db->getInstance(), 2);

//$dao->Update($db->getInstance(),'www.TCHAU.com', 3);

?>

