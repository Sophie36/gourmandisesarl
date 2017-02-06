<?php
/* Smarty version 3.1.29, created on 2017-02-06 13:04:49
  from "C:\Wamp64\www\gourmandisesarl\template\produitVueModif.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589874711cf351_05511286',
  'file_dependency' => 
  array (
    '2aca5053658885b18b0893e26c062c9edf0519d9' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandisesarl\\template\\produitVueModif.tpl',
      1 => 1486386187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589874711cf351_05511286 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
        <?php
$_from = $_smarty_tpl->tpl_vars['modifProduits']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_Produit_0_saved_item = isset($_smarty_tpl->tpl_vars['Produit']) ? $_smarty_tpl->tpl_vars['Produit'] : false;
$_smarty_tpl->tpl_vars['Produit'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['Produit']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['Produit']->value) {
$_smarty_tpl->tpl_vars['Produit']->_loop = true;
$__foreach_Produit_0_saved_local_item = $_smarty_tpl->tpl_vars['Produit'];
?>
        <form method="post" action="index.php" onsubmit="return verifier(this);">
                <input type="hidden" name="gestion" value="produit">
                <input type="hidden" name="action" value="validermodifier">
                <input type="hidden" name="reference" value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
">
                Designation :<input type="text" name="designation" value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['designation'];?>
" required><br>
                Prix unitaire :<input type="text" name="prixunitaireht" value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['prixunitaireht'];?>
"><br>
                Descriptif :<select name="descriptif" id="descriptif">
                    <option value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['descriptif'];?>
"><?php echo $_smarty_tpl->tpl_vars['G']->value;?>
</option>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['descriptif'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value;?>
</option>
                </select><br>
                Stock : <input type="text" id="stock" name="stock" value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['stock'];?>
"><br>
                Quantité : <input type="text" name="quantite" value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['quantite'];?>
"><br>
                Poids Piece: <input type="text" name="poidspiece" value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['poidspiece'];?>
"><br>
                <input type="submit" name="retour" value="Retour">
                <input type="submit" name="validermodifier" value="Valider" />
        </form> 
        <?php
$_smarty_tpl->tpl_vars['Produit'] = $__foreach_Produit_0_saved_local_item;
}
if ($__foreach_Produit_0_saved_item) {
$_smarty_tpl->tpl_vars['Produit'] = $__foreach_Produit_0_saved_item;
}
?>
    </body>
</html><?php }
}
