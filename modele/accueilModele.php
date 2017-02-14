<?php

/*include 'modele.php';

function listeaccueil(){
    $cnx=getBD();
    $sql="SELECT * FROM produit";
    $idRequete=executeRequete($cnx, $sql);
    return $idRequete;
}*/

include  'modele.php' ;
function listeca(){
    $cnx=getBD();
    $sql="SELECT * FROM produit";
    $idRequete=executeRequete($cnx,$sql);
    return $idRequete;
}