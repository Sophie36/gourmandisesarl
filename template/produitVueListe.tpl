<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>{$msg|upper}</h2>
        </br>
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
                    <form method="post" action="index.php">        
                            <input type="hidden" name="gestion" value="Accueil">
                            <input type="submit" name="Accueil" value="Retour">
                    </form>
        
        </br>
        <table>
            <tr>
                <th>reference</th>
                <th>designation</th>
                <th>prix</th>
            </tr>
            {foreach from=$listeProduits item=Produit}
            <tr>
                <td>{$Produit.reference}</td>
                <td>{$Produit.designation}</td>
                <td>{$Produit.prix}</td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="reference" value="{$Produit.reference}">
                        <input type="hidden" name="gestion" value="produit">
                        <input type="hidden" name="action" value="consulter">
                        <input type="submit" name="consulter" value="Consulter">
                    </form>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="reference" value="{$Produit.reference}">
                        <input type="hidden" name="gestion" value="produit">
                        <input type="hidden" name="action" value="modifier">
                        <input type="submit" name="modifier" value="Modifier">
                    </form>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="reference" value="{$Produit.reference}">
                        <input type="hidden" name="gestion" value="produit">
                        <input type="hidden" name="action" value="supprimer">
                        <input type="submit" name="supprimer" value="Supprimer">
                    </form>
                </td>
            </tr>
            {/foreach}
        </table>
        Nombre d'enregistrements : {$nbligne}
        <br>
        <form method="POST" action="index.php">
            <p>
                <label>Ajouter un produit</label>
                <input type="hidden" name="gestion" value="produit">
                <input type="hidden" name="action" value="ajouter">
                <input type="submit" name="ajouter" value="Ajouter">
            </p>
        </form>
    </body>
</html>