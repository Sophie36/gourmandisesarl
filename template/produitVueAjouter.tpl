<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>{$msg}</h2>
        <form method="post" action="index.php" onsubmit="return verifier(this);">
                <input type="hidden" name="gestion" value="produit">
                <input type="hidden" name="action" value="validerajouter">
                Désignation : <input type="text" name="designation" placeholder="Ex : désignation" value="" size="40" maxlength="10" required="required"></br>
                </br>
                Prix unitaire : <input type="text" name="prixunitaireht" placeholder="Ex : 0.00" size="40" maxlength="10"></br>
                </br>
                Descriptif : <select name="descriptif" id="descriptif"></br>
                    <option value="G">{$G}</option>
                    <option value="P">{$P}</option>
                </select></br>
                </br>
                Stock : <input type="text" name="stock" placeholder="Ex : 15" size="40" maxlength="10"></br>
                </br>
                Quantité : <input type="text" name="quantite" placeholder="Ex : 2" size="40" maxlength="10"></br>
                </br>
                Poids pièce : <input type="text" name="poidspiece" placeholder="Ex : 500" size="40" maxlength="10"></br>
                </br>
                <input type="submit" name="retour" value="Retour">
                <input type="submit" name="validerajouter" value="Valider">
        </form> 
    </body>
</html>
 