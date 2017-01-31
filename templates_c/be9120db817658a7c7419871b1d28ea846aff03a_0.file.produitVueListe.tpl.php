<?php
/* Smarty version 3.1.29, created on 2017-01-31 15:56:52
  from "C:\Wamp64\www\gourmandisesarl\template\produitVueListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5890b3c440ea66_61423431',
  'file_dependency' => 
  array (
    'be9120db817658a7c7419871b1d28ea846aff03a' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandisesarl\\template\\produitVueListe.tpl',
      1 => 1485878208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5890b3c440ea66_61423431 ($_smarty_tpl) {
?>
<!DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <h2><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['msg']->value, 'UTF-8');?>
</h2>
            </br>
            <table>
                <th>reference</th>
                <th>designation</th>
                <th>prix</th>
                <?php
$_from = $_smarty_tpl->tpl_vars['listeProduits']->value;
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
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
</td>
                    <td>
                        <form method="post" action="produitVueListe.php">
                        <input type="hidden" name="identifiant" value="$Produit.reference">
                        <input type="submit" value="C" />
                        </form>
                    </td>    
                    <td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['designation'];?>
</td>
                    
                    <td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['prix'];?>
</td>
                        
                </tr>
                <?php
$_smarty_tpl->tpl_vars['Produit'] = $__foreach_Produit_0_saved_local_item;
}
if ($__foreach_Produit_0_saved_item) {
$_smarty_tpl->tpl_vars['Produit'] = $__foreach_Produit_0_saved_item;
}
?>
            </table>
            Nombre d'enregistrements: <?php echo $_smarty_tpl->tpl_vars['nblig']->value;?>

        </body>
    </html><?php }
}
