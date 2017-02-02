<?php
/* Smarty version 3.1.29, created on 2017-02-02 15:47:49
  from "C:\Wamp64\www\gourmandisesarl\template\produitVueAjouter.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589354a562bbd3_43785403',
  'file_dependency' => 
  array (
    'd4429caaa96382eeae34ae91094c76aa9cd83755' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandisesarl\\template\\produitVueAjouter.tpl',
      1 => 1486050449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589354a562bbd3_43785403 ($_smarty_tpl) {
?>
<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="produit">
                <input type="hidden" name="action" value="valideajout">
                Désignation : <input type="text" name="designation" placeholder="Ex : désignation" value="" size="40" maxlength="10" required="required"></br>
                </br>
                Prix unitaire : <input type="text" name="prix_unitaire_HT" placeholder="Ex : 0.00" size="40" maxlength="10"></br>
                </br>
                Descriptif : <select name="descriptif" id="descriptif"></br>
                    <option value="G"><?php echo $_smarty_tpl->tpl_vars['G']->value;?>
</option>
                    <option value="P"><?php echo $_smarty_tpl->tpl_vars['P']->value;?>
</option>
                </select></br>
                </br>
                Stock : <input type="text" name="stock" placeholder="Ex : 15" size="40" maxlength="10"></br>
                </br>
                Quantité : <input type="text" name="quantite" placeholder="Ex : 2" size="40" maxlength="10"></br>
                </br>
                Poids pièce : <input type="text" name="poids_piece" placeholder="Ex : 500" size="40" maxlength="10"></br>
                </br>
                <input type="submit" name="retour" value="Retour">
                <input type="submit" name="validerajouter" value="Valider">
            </form>
        </body>
    </html><?php }
}
