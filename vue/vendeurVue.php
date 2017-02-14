<?php
require_once 'include/libs/Smarty.class.php';
$tpl=new Smarty();
$listeVendeur=array();
$i=0;
while($row=$idRequete->fetch()){
    $listeVendeur[$i]['codev']=$row['Code_v'];
    $listeVendeur[$i]['nom']=$row['nom'];
    $listeVendeur[$i]['adresse']=$row['adresse'];
    $i++;
}
$nbligne=$idRequete->rowCount();
$tpl->assign('msg','Liste des vendeurs');
$tpl->assign('nbligne',$nbligne);
$tpl->assign('listeVendeur', $listeVendeur);
$tpl->display('template/vendeurVue.tpl');

