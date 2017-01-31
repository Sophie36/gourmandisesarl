<?php
    include 'modele.php';
    function listeProduits(){
        $cnx=getBD();
        $sql='SELECT * FROM produit';
        $idRequete=executeRequete($cnx,$sql);
        return $idRequete;
    }
?>

