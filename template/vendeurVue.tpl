<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <nav>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="accueil">
                <input type="submit" name="accueil" value="accueil">
            </form>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="produit">
                <input type="submit" name="produit" value="articles">
            </form>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="clients">
                <input type="submit" name="clients" value="clients">
            </form>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="vendeur">
                <input type="submit" name="vendeur" value="vendeur">
            </form>
        </nav>
        <h2>{$msg|upper}</h2>
        <br>
        <table>
            <tr>
                <th>code vendeur</th>
                <th>designation</th>
                <th>prix</th>
            </tr>
            {foreach from=$listeVendeur item=Vendeur}
            <tr>
                <td>{$Vendeur.codev}</td>
                <td>{$Vendeur.nom}</td>
                <td>{$Vendeur.adresse}</td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="{$Vendeur.codev}">
                        <input type="hidden" name="gestion" value="produit">
                        <input type="hidden" name="action" value="consulter">
                        <input type="submit" name="consulter" value="Consulter">
                    </form>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="{$Vendeur.codev}">
                        <input type="hidden" name="gestion" value="produit">
                        <input type="hidden" name="action" value="modifier">
                        <input type="submit" name="modifier" value="Modifier">
                    </form>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="{$Vendeur.codev}">
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