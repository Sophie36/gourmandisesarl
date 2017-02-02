<?php
require_once 'modele/produitModele.php';

function liste(){
    $idRequete=listeProduits();
    require_once 'vue/produitVueListe.php';    
}
function ajouter($param){
    $action=$param['action'];
    require_once 'vue/produitVueAjouter.php';    
}
?>
