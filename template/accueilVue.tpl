<!DOCTYPE html>
<html>
    <head>
        <title>Tableau de bord</title>
    </head>
    <body>
        <h2>{$msg}</h2>
        
        <form method="post" action="index.php">
                <input type="hidden" name="gestion" value="produit">
                <input type="submit" name="produit" value="Articles">
        </form>
        
        <form method="post" action="index.php">
                <input type="hidden" name="gestion" value="client">
                <input type="submit" name="clients" value="Clients">
        </form> 
        
        <form method="post" action="index.php">        
                <input type="hidden" name="gestion" value="vendeur">
                <input type="submit" name="vendeur" value="Vendeurs">
        </form> 
        
        <!--<form method="post" action="index.php">        
                <input type="submit" name="validerajouter" value="Valider">
        </form>
        <form method="POST" action="">
            <input type='submit' name='valider' value='Accueil'>
        </form>-->
        
    </body>
</html>