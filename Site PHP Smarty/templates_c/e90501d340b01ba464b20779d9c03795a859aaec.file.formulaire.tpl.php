<?php /* Smarty version Smarty-3.1.15, created on 2014-01-09 17:09:17
         compiled from ".\templates\formulaire.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262852ce6246d5a2b2-03366214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e90501d340b01ba464b20779d9c03795a859aaec' => 
    array (
      0 => '.\\templates\\formulaire.tpl',
      1 => 1389283753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262852ce6246d5a2b2-03366214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ce6246da84b0_16281709',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce6246da84b0_16281709')) {function content_52ce6246da84b0_16281709($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<body>
						<form method="POST" action="traitement.php"enctype="multipart/form-data" onsubmit="return verifier();">
							<fieldset style="width:430px;">
								<legend><span style="text-decoration:underline;">Ajouter un article </span></legend>
				
								<label for="text">Titre :</label><br />
								<input type="text" name="titre"  /><br />
				
								<label for="text"> Texte :</label><br />
								<input type="text" name="texte" style="width:600px;height:200px;"  /><br />
						
								<label for="checkbox"> Publication : </label>
								<input type="checkbox" name="option" value="1"> Oui<br>
								
								<br>
								
								<label for="text"> Fichier :</label><br />
								<input type="file" id="datafile" name="datafile" size="40" >

							</fieldset>
							<center><input type="submit" value="Valider" name="poster"/>
					<input type="submit" value="Annuler" /></center></font>
					<br>
					</form>
</body>
</html> <?php }} ?>
