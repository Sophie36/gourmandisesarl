<?php
include  'modele.php' ;
function ajouterProduits($param){
    $designation = $param['designation'];
    $prixunitaireht=$param['prixunitaireht'];
    $descriptif=$param['descriptif']; 
    $stock=$param['stock']; 
    $quantite=$param['quantite'];
    $poidspiece=$param['poidspiece'];
    
    $cnx=getBD();
    $sql="INSERT INTO produit(designation, prix_unitaire_HT,descriptif,stock,quantite,poids_piece) VALUES (?,?,?,?,?,?)";
    $idRequete=executeRequete($cnx, $sql,array($designation,$prixunitaireht,$descriptif,$stock,$quantite,$poidspiece));
    return $idRequete;
}
function consultProduits($param){
    $reference= $param['reference'];
    $cnx=getBD();
    $sql="SELECT * FROM produit WHERE reference = ?";
    $idRequete=executeRequete($cnx, $sql,array($reference));
    return $idRequete;
}
function modifProduits($param){
    $reference= $param['reference'];
    $designation = $param['designation'];
    $prixunitaireht=$param['prixunitaireht'];
    $descriptif=$param['descriptif']; 
    $stock=$param['stock']; 
    $quantite=$param['quantite'];
    $poidspiece=$param['poidspiece'];
    $cnx=getBD();
    $sql="UPDATE produit SET designation=?, prix_unitaire_HT=?,descriptif=?,stock=?,quantite=?,poids_piece=? WHERE reference=?";
    $idRequete=executeRequete($cnx, $sql,array($designation,$prixunitaireht,$descriptif,$stock,$quantite,$poidspiece,$reference));
    return $idRequete;
}
function supprimeProduits($param){
    $reference= $param['reference'];
    $designation = $param['designation'];
    $prixunitaireht=$param['prixunitaireht'];
    $descriptif=$param['descriptif']; 
    $stock=$param['stock']; 
    $quantite=$param['quantite'];
    $poidspiece=$param['poidspiece'];
    $cnx=getBD();
    $sql="DELETE FROM produit WHERE reference=?";
    $idRequete=executeRequete($cnx, $sql,array($reference));
    return $idRequete;
}
function listeProduits(){
    $cnx=getBD();
    $sql="SELECT * FROM produit";
    $idRequete=executeRequete($cnx, $sql);
    return $idRequete;
}
?>