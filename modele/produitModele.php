<?php
    include 'modele.php';
    function ajouterProduits(){
        $cnx=getBD();
        $sql='INSERT INTO produit(designation,prix_unitaire_HT,descriptif,stock,quantite,poids_piece) VALUES (?,?,?,?,?,?)';
        $idRequete=executeRequete($cnx,$sql);
        return $idRequete;
    }
    function listeProduits(){
        $cnx=getBD();
        $sql='SELECT * FROM produit';
        $idRequete=executeRequete($cnx,$sql);
        return $idRequete;
    }
?>

