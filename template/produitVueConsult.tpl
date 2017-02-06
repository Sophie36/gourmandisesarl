<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>{$msg}</h2>
        {foreach from=$consultProduits item=Produit}
        <form method="post" action="index.php" onsubmit="return verifier(this);">
                <input type="hidden" name="gestion" value="produit">
                <input type="hidden" name="action" value="validerajouter">
                Designation :<input type="text" name="designation" value="{$Produit.designation}" required><br>
                Prix unitaire :<input type="text" name="prixunitaireht" value="{$Produit.prixunitaireht}"><br>
                Descriptif :<select name="descriptif" id="descriptif">
                    <option value="{$Produit.descriptif}">{$G}</option>
                    <option value="{$Produit.descriptif}">{$P}</option>
                </select><br>
                Stock : <input type="text" id="stock" name="stock" value="{$Produit.stock}"><br>
                Quantité : <input type="text" name="quantite" value="{$Produit.quantite}"><br>
                Poids Piece: <input type="text" name="poidspiece" value="{$Produit.poidspiece}"><br>
                <input type="submit" name="retour" value="Retour">
                <input type="submit" name="valider" value="Valider" />
        </form> 
        {/foreach}
    </body>
</html>