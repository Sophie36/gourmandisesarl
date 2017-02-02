<?php
    include 'modele.php';
    function ajouterProduits($param){
        $designation = $param('designation');
        $prix_unitaire_HT = $param('prix_unitaire_HT');
        $descriptif = $param('descriptif');
        $stock = $param('stock');
        $quantite= $param('quantite');
        $poids_piece = $param('poids_piece');
        $cnx=getBD();
        $sql='INSERT INTO produit(designation,prix_unitaire_HT,descriptif,stock,quantite,poids_piece) VALUES (?,?,?,?,?,?)';
        $idRequete=executeRequete($cnx,$sql,$designation,$descriptif,$stock,$quantite,$poids_piece);
        return $idRequete;
    } 
    function listeProduits(){
        $cnx=getBD();
        $sql='SELECT * FROM produit';
        $idRequete=executeRequete($cnx,$sql);
        return $idRequete;
    }
?>

