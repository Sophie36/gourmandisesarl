<?php
/* Smarty version 3.1.29, created on 2017-02-02 14:53:54
  from "C:\Wamp64\www\gourmandisesarl\vue\produitVueConsult.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58934802519550_56949232',
  'file_dependency' => 
  array (
    'cca0bc3e9003038f7a5b96021c56aec44c45366f' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandisesarl\\vue\\produitVueConsult.tpl',
      1 => 1486047217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58934802519550_56949232 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
        <form method="post" action="index.php" onsubmit="return verifier(this);">
                <input type="hidden" name="gestion" value="produit">
                <input type="hidden" name="action" value="validerajouter">
                Designation :<input type="text" name="designation" value="" required><br>
                Prix unitaire :<input type="text" name="prixunitaireht" value=""><br>
                Descriptif :<select name="descriptif" id="descriptif">
                    <option value="G"><?php echo $_smarty_tpl->tpl_vars['G']->value;?>
</option>
                    <option value="P"><?php echo $_smarty_tpl->tpl_vars['P']->value;?>
</option>
                </select><br>
                Stock : <input type="text" id="stock" name="stock" value=""><br>
                Quantité : <input type="text" name="quantite" value=""><br>
                Poids Piece: <input type="text" name="poidspiece" value="<?php echo $_smarty_tpl->tpl_vars['valeur']->value;?>
"><br>
                <input type="submit" name="validerajouter" value="Valider" />
        </form>
        <?php echo '<script'; ?>
 type="text/javascript">
            var stock = document.getElementById('stock').value;
            function verifier() {
                if(stock=="" || stock="NULL"){
                    alert("Le champs stock n'est pas completer");
                    document.getElementById('stock').focus;
                    return false;
                } else {
                return true;
            }
            }   
        <?php echo '</script'; ?>
>        
    </body>
</html><?php }
}
