<?php
    require_once 'include/libs/Smarty.class.php';
    $tpl=new Smarty();
    $listeProduits=array();
    $i=0;
    while($row=$idRequete->fetch()){
        $listeProduits[$i]['reference']=$row['reference'];
        $listeProduits[$i]['designation']=$row['designation'];
        $listeProduits[$i]['prix']=$row['prix_unitaire_HT'];
        $i++;
    }
    $nblig=$idRequete->rowCount();
    $tpl->assign('msg','Liste des Produits');
    $tpl->assign('nblig',$nblig);
    $tpl->assign('listeProduits',$listeProduits);
    $tpl->display('template/produitVueListe.tpl');


