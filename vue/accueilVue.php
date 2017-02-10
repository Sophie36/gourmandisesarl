<?php
require_once 'include/libs/Smarty.class.php';
$tpl=new Smarty();

$tpl->assign('msg','Accueil');
$tpl->assign("G", "Gestion");
$tpl->assign("P", "Articles");
$tpl->assign("valeur", "Clients");
$tpl->assign("valeure", "Vendeurs");

$tpl->display('template/accueilVue.tpl');

