<?php
    require_once 'include/libs/Smarty.class.php';
    $tpl=new Smarty();
  
    /*$ajouterProduits=array();
    $i=0;
    while($row=$idRequete->fetch()){
        $ajouterProduits[$i]['designation']=$row['designation'];
        $ajouterProduits[$i]['prix']=$row['prix_unitaire_HT'];
        $ajouterProduits[$i]['descriptif']=$row['descriptif'];
        $ajouterProduits[$i]['stock']=$row['stock'];
        $ajouterProduits[$i]['quantite']=$row['quantite'];
        $ajouterProduits[$i]['poids_piece']=$row['poids_piece'];
        $i++;
    }
    if (isset($_POST['designation']) && isset($_POST['prix_unitaire_HT'])&& isset($_POST['descriptif'])&& isset($_POST['stock'])&& isset($_POST['quantite'])&& isset($_POST['poids_piece'])) {
                $designation=$_POST["designation"];
                $prix_unitaire_HT=$_POST["prix_unitaire_HT"];
                $descriptif=$_POST["descriptif"];
                $stock=$_POST["stock"];
                $quantite=$_POST["quantite"];
                $poids_piece=$_POST["poids_piece"];   
            }
    $nblig=$idRequete->rowCount();
    $tpl->assign('msg','Ajouter des Produits');
    $tpl->assign('nblig',$nblig);
    $tpl->assign('ajouterProduits',$ajouterProduits);*/
    switch ($action){
        case 'ajouter' :
            $tpl->assign("msg","ajout d'un produit");
            $tpl->assign("G","Gramme");
            $tpl->assign("P","Poids Piece");
            break;
         case 'consulter' :
            $tpl->assign("msg","consulter un produit");
            break;
    }
    $tpl->display("template/produitVueAjouter.tpl");


           
  
            
            
