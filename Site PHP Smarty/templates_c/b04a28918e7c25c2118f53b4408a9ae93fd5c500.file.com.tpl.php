<?php /* Smarty version Smarty-3.1.15, created on 2014-01-09 18:02:12
         compiled from ".\templates\com.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2624452ce59f6462315-77657443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b04a28918e7c25c2118f53b4408a9ae93fd5c500' => 
    array (
      0 => '.\\templates\\com.tpl',
      1 => 1389286652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2624452ce59f6462315-77657443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ce59f65584d7_71384259',
  'variables' => 
  array (
    'data_tab' => 0,
    'data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce59f65584d7_71384259')) {function content_52ce59f65584d7_71384259($_smarty_tpl) {?><SCRIPT language="javascript">
function veriftextbox (formulaire) {
	  if (formulaire.pseudo.value=="" || formulaire.commentaire.value=="") alert("Oops ce champ ne peut etre vide!");
	  
	  else if (formulaire.email.value.indexOf("@",0)<0) alert("L'adresse Mail saisie est incorrecte !");
	  
      else 
         formulaire.submit();
   }
   
 function clear(formulaire){
 formulaire.pseudo.value="";
}
</SCRIPT> 

<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_tab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
<p><img src="img/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
.jpg" alt="image"/>
<h4><EM><u><?php echo $_smarty_tpl->tpl_vars['data']->value['titre'];?>
</u></EM><h4>
<p style = "text-align : justify;">
<h5><p>Le : <?php echo $_smarty_tpl->tpl_vars['data']->value['date_fr'];?>
 </p><h5>
<h5><p><?php echo $_smarty_tpl->tpl_vars['data']->value['corps'];?>
</p><h5>

<?php } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<body>
						<form method="POST" action="com_traitement.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"enctype="multipart/form-data" onsubmit="return verifier();">
							<fieldset style="width:430px;">
								<legend><h5><span style="text-decoration:underline;">Ajouter un commentaire </span><h5></legend>
								
								<label for="text"><u>Pseudo :</u></label><br />
								<input type="text" name="pseudo"  /><br />
				
								<label for="text"><u>Email :</u></label><br />
								<input type="text" name="email"  /><br />
				
								<label for="text"><u>Commentaire :</u></label><br />
								<input type="text" name="commentaire" style="width:600px;height:200px;"/><br />

							</fieldset>
							<center><input type="button" value="Valider" name="poster" onClick="veriftextbox(this.form)"/>
							<input type="button" value="Annuler" OnClick="clear(this.form)"/></center>
							</font>
					<br>
					</form>
</body>
</html> <?php }} ?>
