<?php
switch($gestion){
    case 'produit':
        require_once ($gestion.'controleur.php');
        break;
    default :
        echo "Impossible !!!";
}
    if(isset($_POST['ajouter'])){
        ajouter();
    }elseif(isset($_POST['valider'])){
        valider();
    }elseif(isset($_POST['consulter'])){
        consulter();
    }else{
        liste();
    }
?>          
