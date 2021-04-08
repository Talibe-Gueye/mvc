<?php
require_once "config/autoload.php";

//$rolesdao = new RolesDb();
//$rolesdao->add();

//ici on inclue le chemin ds lequel se trouve RolesController pour pouvoir l'utiliser avec namespace
//use src\controller\RolesController;
//$rolesdao = new RolesController();
//$rolesdao->add();
//$rolesdao->getAll();

$mvc = new libs\system\BootStrap();

?>