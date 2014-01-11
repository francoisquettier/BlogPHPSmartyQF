<html>
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
								<input type="text" placeholder="Quel est votre adresse email ?" name="email"  /><br />
				
								<label for="text"> Mot de passe :</label><br />
								<input type="password" placeholder="Quel est votre mot de passe ?" name="mdp"  /><br />
							
							</fieldset>
							<div class="form-action">
							<center><input type="button" value="Valider" name="poster" onClick="veriftextbox(this.form)"/>
							<input type="submit" value="Annuler" onclick="self.location.href='index.php'""/></center>
							</div>
</div>
					<br>
					</form>
</body>
</html> 
