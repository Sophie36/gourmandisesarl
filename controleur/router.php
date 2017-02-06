<?php
switch ($gestion){
case 'Accueil':
    require_once($gestion.'Controleur.php');
    break;
default :
    echo "impossible !!!";
}
/*if(isset($_POST['ajouter'])){
    ajouter($_POST);
}elseif(isset($_POST['validerajouter'])){
    validerajouter($_POST);
}elseif(isset($_POST['valider'])) {
    valider($_POST);
}elseif(isset($_POST['retour'])) {
    retour($_POST);
}elseif (isset($_POST['consulter'])) {
    consulter($_POST);
}elseif (isset($_POST['modifier'])) {
    modifier($_POST);
}elseif (isset($_POST['validermodifier'])) {
    validermodifier($_POST);
}elseif (isset($_POST['supprimer'])) {
    supprimer($_POST);
}elseif (isset($_POST['validersupprimer'])) {
    validersupprimer($_POST);
}else {
liste();    
}*/
if(isset($_POST['gestion'])){
    gestion();
}elseif(isset($_POST['articles'])){
    articles();
}elseif(isset($_POST['clients'])){
    clients();
}elseif(isset($_POST['vendeur'])){
    vendeur();
}else {
    liste(); 
}
?>
