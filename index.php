<?php
        require_once 'include/configuration.php';
        if(isset($_REQUEST['gestion'])){
            $gestion=$_REQUEST['gestion'];
        } else {
            $gestion='accueil';
        }
        require_once 'controleur/router.php';

?>
<script src="include/libs/jquery-3.1.1.js"></script>
<script src="controleur/common.js"></script>