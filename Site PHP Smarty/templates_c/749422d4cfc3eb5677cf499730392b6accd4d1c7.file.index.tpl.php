<?php /* Smarty version Smarty-3.1.15, created on 2014-01-09 17:07:39
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:765452ce59d9c472c6-67534542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1389283654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '765452ce59d9c472c6-67534542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ce59d9dae914_86043773',
  'variables' => 
  array (
    'data_tab' => 0,
    'data' => 0,
    'identification' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce59d9dae914_86043773')) {function content_52ce59d9dae914_86043773($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_tab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
<p><img src="img/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
.jpg" alt="image"/>
<h4><EM><?php echo $_smarty_tpl->tpl_vars['data']->value['titre'];?>
</EM><h4>
<p style = "text-align : justify;">
<h5><p>Le : <?php echo $_smarty_tpl->tpl_vars['data']->value['date_fr'];?>
 </p><h5>
<h5><p><?php echo $_smarty_tpl->tpl_vars['data']->value['corps'];?>
</p><h5>
<?php if ($_smarty_tpl->tpl_vars['identification']->value==true) {?>
<div align="right"><a href="mod.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><font size="3"><font face="Calibri">Modifier Article</font></font></a>
&nbsp; &nbsp;
<a href="com.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><font size="3"><font face="Calibri">Commenter article</font></font></a><br />
<a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><font size="3"><font face="Calibri">Supprimer article</font></font></a><br /></div>

<?php }?>
<hr> 



<?php } ?>
<?php }} ?>
