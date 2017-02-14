<?php
function listeProduits(){
    $cnx=getBD();
    $sql="SELECT * FROM produit";
    $idRequete=  executeRequete($cnx,$sql);
    return $idRequete;
}
function authentification($param){
    $reference=$param['identifiant'];
    $cnx=getBD();
    $sql="SELECT * FROM produit WHERE reference=?";
    $idRequete=executeRequete($cnx,$sql,array($reference));
    return $idRequete;
}