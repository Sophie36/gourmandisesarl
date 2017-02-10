<?php
/* Smarty version 3.1.29, created on 2017-02-10 14:07:18
  from "C:\Wamp64\www\gourmandisesarl\template\accueilVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589dc916aa8e58_65212685',
  'file_dependency' => 
  array (
    'dfe63ee441e97047fcde2a65e7bfcee86e419421' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandisesarl\\template\\accueilVue.tpl',
      1 => 1486735629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589dc916aa8e58_65212685 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tableau de bord</title>
    </head>
    <body>
        <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
        
        <form method="post" action="index.php">
                <input type="hidden" name="gestion" value="produit">
                <input type="submit" name="produit" value="Articles">
        </form>
        
        <form method="post" action="index.php">
                <input type="hidden" name="gestion" value="client">
                <input type="submit" name="clients" value="Clients">
        </form> 
        
        <form method="post" action="index.php">        
                <input type="hidden" name="gestion" value="vendeur">
                <input type="submit" name="vendeur" value="Vendeurs">
        </form> 
        
        <!--<form method="post" action="index.php">        
                <input type="submit" name="validerajouter" value="Valider">
        </form>
        <form method="POST" action="">
            <input type='submit' name='valider' value='Accueil'>
        </form>-->
        
    </body>
</html><?php }
}
