<?php /* Smarty version Smarty-3.1.15, created on 2014-01-09 09:45:19
         compiled from ".\templates\delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:802352ce619fb32527-38570138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3f8f81f0413e558d9e9dd12f45c915ade7dc433' => 
    array (
      0 => '.\\templates\\delete.tpl',
      1 => 1389256149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '802352ce619fb32527-38570138',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ce619fbce927_53211114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce619fbce927_53211114')) {function content_52ce619fbce927_53211114($_smarty_tpl) {?><body>
<center>Voulez vous vraiment supprimer cette article</center>
<form method="GET" action="delete.php"enctype="multipart/form-data">
<center><input type="submit" value="OUI" name="poster"/></center></font>
</body><?php }} ?>
