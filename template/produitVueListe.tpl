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
                    <td>
                        <form method="post" action="produitVueListeConsult.php">
                        <input type="hidden" name="identifiant" value="$Produit.reference">
                        <input type="submit" value="C" />
                        </form>
                    </td>    
                    <td>{$Produit.designation}</td>
                    
                    <td>{$Produit.prix}</td>
                        
                </tr>
                {/foreach}
            </table>
            Nombre d'enregistrements: {$nblig}
        </body>
    </html>