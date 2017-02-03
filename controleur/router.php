<?php
switch($gestion){
    case 'produit':
        require_once ($gestion.'controleur.php');
        break;
    default :
        echo "Impossible !!!";
}
    if(isset($_POST['ajouter'])){
        ajouter($_POST);
    }elseif(isset($_POST['validerajouter'])){
        validerajouter($_POST);
    }elseif(isset($_POST['valider'])){
        valider();
    }elseif(isset($_POST['consulter'])){
        consulter($_POST);
    }else{
        liste();
    }
?>          
