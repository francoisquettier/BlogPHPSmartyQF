<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<body>
						<form method="POST" action="traitement.php"enctype="multipart/form-data" onsubmit="return verifier();">
							<fieldset style="width:430px;">
								<legend><span style="text-decoration:underline;">Ajouter un article </span></legend>
				
								<label for="text">Titre :</label><br />
								<input type="text" placeholder="Quel est votre titre ?" name="titre"  /><br />
				
								<label for="text"> Texte :</label><br />
								<input type="text" placeholder="Description de l'article" name="texte" style="width:600px;height:200px;"  /><br />
						
								<label for="checkbox"> Publication : </label>
								<input type="checkbox" name="option" value="1"> Oui<br>
								
								<br>
								
								<label for="text"> Fichier :</label><br />
								<input type="file" id="datafile" name="datafile" size="40" >

							</fieldset>
							<center><input type="submit" value="Valider" name="poster"/>
					<input type="submit" value="Annuler" onclick="self.location.href='index.php'" /></center></font>
					<br>
					</form>
</body>
</html> 