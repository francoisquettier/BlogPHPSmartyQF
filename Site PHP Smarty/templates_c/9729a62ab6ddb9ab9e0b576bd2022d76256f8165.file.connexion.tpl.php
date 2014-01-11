<?php /* Smarty version Smarty-3.1.15, created on 2014-01-09 09:35:04
         compiled from ".\templates\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3255152ce59ddcb5735-78952143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9729a62ab6ddb9ab9e0b576bd2022d76256f8165' => 
    array (
      0 => '.\\templates\\connexion.tpl',
      1 => 1389256149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3255152ce59ddcb5735-78952143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ce59ddcffac5_67018600',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce59ddcffac5_67018600')) {function content_52ce59ddcffac5_67018600($_smarty_tpl) {?><html>
<head>
<SCRIPT LANGUAGE="JavaScript">
/* On crée une fonction de verification */
function verifConnexion(formulaire)
{
	  if (formulaire.email.value=="" || formulaire.mdp.value=="") alert("Le formulaire n'a pas ete correctement renseigné !");
	  
	  else if (formulaire.email.value.indexOf("@",0)<0) alert("L'adresse email ne correspond pas aux critere xxx@xxx.fr!");
	  
      else 
         formulaire.submit();
}

</SCRIPT>
</head>
<body>
<div class="span8">
						<form method="POST" action="co_traitement.php"enctype="multipart/form-data">
							<fieldset style="width:430px;">
								<legend><span style="text-decoration:underline;">Connexion </span></legend>
				
								<label for="text">Adresse Email :</label><br />
								<input type="text" name="email"  /><br />
				
								<label for="text"> Mot de passe :</label><br />
								<input type="password" name="mdp"  /><br />
							
							</fieldset>
							<div class="form-action">
							<input type="button" name="validerCon" value="Valider" onClick="verifConnexion(this.form)" />
							</div>
					<br>
					</form><noscript>
</body>
</html> 
<?php }} ?>
