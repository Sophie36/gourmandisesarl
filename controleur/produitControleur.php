<?php
require_once '../modele/produitModele.php';
//require_once 'modele/produitModele.php';

$productToConsult = filter_input(INPUT_GET,'idProduct');
if(!empty($productToConsult)|| !(is_null($productToConsult))){
    getProductToJSON($productToConsult);
}

function getProductToJSON($id){
    echo $id;
}

function ajouter($param) {
    $action=$param['action'];
    require_once 'vue/produitVueAjouter.php';
}
function validerajouter($param) {
    $action=$param['action'];
    $idRequete=ajouterProduits($param);
    liste();
}
function liste() {
    $idRequete=listeProduits();
    require_once 'vue/produitVueListe.php';
}
function consulter($param) {
    $action=$param['action'];
    $idRequete=consultProduits($param);
    require_once 'vue/produitVueAjouter.php';
}
function modifier($param) {
    $action=$param['action'];
    $idRequete=consultProduits($param);
    require_once 'vue/produitVueAjouter.php';
}
function validermodifier($param) {
    $action=$param['action'];
    $idRequete=modifProduits($param);
    liste();
}
function supprimer($param) {
    $action=$param['action'];
    $idRequete=consultProduits($param);
    require_once 'vue/produitVueAjouter.php';
}
function validersupprimer($param) {
    $action=$param['action'];
    $idRequete=supprimeProduits($param);
    liste();
}
function valider(){
    liste();
}
function retour(){
    liste();
}
?>

