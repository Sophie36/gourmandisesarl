<?php
require_once 'include/libs/Smarty.class.php';
$tpl=new Smarty();
switch ($action){
case 'ajouter' :
    $tpl->assign("msg","Ajout d'un produit");
    $tpl->assign("G", "Gramme");
    $tpl->assign("P", "Poids piece");
    $tpl->assign("valeur", 0);
    $tpl->display("template/produitVueAjouter.tpl");
    break;
/*case 'validerajouter':
    $tpl->assign("msg","Ajout d'un produit");
    $tpl->assign("G", "Gramme");
    $tpl->assign("P", "Poids piece");
    $tpl->assign("valeur", 0);
    break;*/
case 'consulter' :
    $consultProduits=array();
    $i=0;
    while($row=$idRequete->fetch()){
    $consultProduits[$i]['designation']=$row['designation'];
    $consultProduits[$i]['prixunitaireht']=$row['prix_unitaire_HT'];
    $consultProduits[$i]['descriptif']=$row['descriptif'];
    $consultProduits[$i]['stock']=$row['stock'];
    $consultProduits[$i]['quantite']=$row['quantite'];
    $consultProduits[$i]['poidspiece']=$row['poids_piece'];
    $i++;
    }
    $tpl->assign("msg","Consultation d'un produit");
    $tpl->assign("G", "Gramme");
    $tpl->assign("P", "Poids piece");
    $tpl->assign('consultProduits', $consultProduits);
    $tpl->display("template/produitVueConsult.tpl");
    break;
case 'modifier' :
    $modifProduits=array();
    $i=0;
    while($row=$idRequete->fetch()){
    $modifProduits[$i]['reference']=$row['reference'];    
    $modifProduits[$i]['designation']=$row['designation'];
    $modifProduits[$i]['prixunitaireht']=$row['prix_unitaire_HT'];
    $modifProduits[$i]['descriptif']=$row['descriptif'];
    $modifProduits[$i]['stock']=$row['stock'];
    $modifProduits[$i]['quantite']=$row['quantite'];
    $modifProduits[$i]['poidspiece']=$row['poids_piece'];
    $i++;
    }
    $tpl->assign("msg","Modification d'un produit");
    $tpl->assign("G", "Gramme");
    $tpl->assign("P", "Poids piece");
    $tpl->assign('modifProduits', $modifProduits);
    $tpl->display("template/produitVueModif.tpl");
    break;
case 'supprimer' :
    $supprimeProduits=array();
    $i=0;
    while($row=$idRequete->fetch()){
    $supprimeProduits[$i]['reference']=$row['reference'];    
    $supprimeProduits[$i]['designation']=$row['designation'];
    $supprimeProduits[$i]['prixunitaireht']=$row['prix_unitaire_HT'];
    $supprimeProduits[$i]['descriptif']=$row['descriptif'];
    $supprimeProduits[$i]['stock']=$row['stock'];
    $supprimeProduits[$i]['quantite']=$row['quantite'];
    $supprimeProduits[$i]['poidspiece']=$row['poids_piece'];
    $i++;
    }
    $tpl->assign("msg","Suppression d'un produit");
    $tpl->assign("G", "Gramme");
    $tpl->assign("P", "Poids piece");
    $tpl->assign('supprimeProduits', $supprimeProduits);
    $tpl->display("template/produitVueSupprimer.tpl");
    break;
}