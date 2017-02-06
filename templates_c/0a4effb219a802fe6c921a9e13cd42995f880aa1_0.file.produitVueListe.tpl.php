<?php
/* Smarty version 3.1.29, created on 2017-02-03 09:05:25
  from "C:\Wamp64\www\gourmandisesarl\vue\produitVueListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589447d500e418_71092613',
  'file_dependency' => 
  array (
    '0a4effb219a802fe6c921a9e13cd42995f880aa1' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandisesarl\\vue\\produitVueListe.tpl',
      1 => 1486112720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589447d500e418_71092613 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['msg']->value, 'UTF-8');?>
</h2>
        <br>
        <table>
            <tr>
                <th>reference</th>
                <th>designation</th>
                <th>prix</th>
            </tr>
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
                <td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['designation'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['prix'];?>
</td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
">
                        <input type="hidden" name="gestion" value="produit">
                        <input type="hidden" name="action" value="consulter">
                        <input type="submit" name="consulter" value="Consulter">
                    </form>
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
        Nombre d'enregistrements : <?php echo $_smarty_tpl->tpl_vars['nbligne']->value;?>

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
</html><?php }
}
