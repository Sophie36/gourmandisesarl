<?php
session_start();//sans cette session le html ne marche pas
    
    if (!isset($_SESSION['username']))
    {
        include 'modele/Login.php';
        die();
    }
?>
<?php
        require_once 'include/configuration.php';
        if(isset($_REQUEST['gestion'])){
            $gestion=$_REQUEST['gestion'];
        } else {
            $gestion='Accueil';
        }
        require_once 'controleur/router.php';

?>