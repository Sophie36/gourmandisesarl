<?php
include  'modele.php' ;

function listeVendeurs(){
    $cnx=getBD();
    $sql="SELECT * FROM vendeur";
    $idRequete=executeRequete($cnx, $sql);
    return $idRequete;
}
function consultvendeurs($param){
    $reference= $param['reference'];
    $cnx=getBD();
    $sql="SELECT * FROM vendeur WHERE reference = ?";
    $idRequete=executeRequete($cnx, $sql,array($reference));
    return $idRequete;
}
?>

