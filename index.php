<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'include/configuration.php';
        if(isset($_REQUEST['gestion'])){
            $gestion=$_REQUEST['gestion'];
        }else{
            $gestion='produit';
        }
        require_once 'controleur/router.php';
        
        ?>
    </body>
</html>
