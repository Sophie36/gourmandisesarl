<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <h2>{$msg|upper}</h2>
            </br>
            <table>
                <th>reference</th>
                <th>designation</th>
                <th>prix</th>
                {foreach from=$listeProduits item=Produit}
                <tr>
                    <td>{$Produit.reference}</td>
                      
                    <td>{$Produit.designation}</td>
                    
                    <td>{$Produit.prix}</td>
                    <td>
                        <form method="post" action="index.php">
                        <input type="hidden" name="identifiant" value="$Produit.reference">
                        <input type="submit" value="C" />
                        </form>
                    </td>      
                </tr>
                {/foreach}
            </table>
            Nombre d'enregistrements: {$nblig}
            <form method="POST" action="index.php">
                <input type ="hidden" name="gestion" value="produit">
                <input type ="hidden" name="action" value="ajouter">
                <input type="submit" name="ajouter" value="Ajouter">
            </form>
        </body>
    </html>