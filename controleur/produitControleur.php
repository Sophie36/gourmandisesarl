<?php
require_once 'modele/produitModele.php';
function ajouter($param){
    $action=$param['action'];
    require_once 'vue/produitVueAjouter.php';   
 
}
function validerajouter($param){
    $action=$param['action'];
    $idRequete=listeProduits($param);
    require_once 'vue/produitVueAjouter.php';    
}
function liste(){
    $idRequete=listeProduits();
    require_once 'vue/produitVueListe.php';    
}
function consulter($param){
    $action=$param['action'];
    $idRequete=consultProduits($param);
    require_once 'vue/produitVueAjouter.php';  
}
?>
