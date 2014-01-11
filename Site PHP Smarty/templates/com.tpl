<SCRIPT language="javascript">
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

{foreach from=$data_tab item=data}
<p><img src="img/{$data['id']}.jpg" alt="image"/>
<h4><EM><u>{$data['titre']}</u></EM><h4>
<p style = "text-align : justify;">
<h5><p>Le : {$data['date_fr']} </p><h5>
<h5><p>{$data['corps']}</p><h5>
{/foreach}

<p><u>Commentaires de l'article </u></p>
<hr> 

{foreach from=$data_tab2 item=data2}
Publie par : <b>{$data2['pseudo']}{$data2['email']}</b>
<p>Message : {$data2['commentaire']}</p>
<hr> 
{/foreach}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<body>
						<form method="POST" action="com_traitement.php?id={$id}"enctype="multipart/form-data" onsubmit="return verifier();">
							<fieldset style="width:430px;">
								<legend><h5><span style="text-decoration:underline;">Ajouter un commentaire </span><h5></legend>
								
								<label for="text"><u>Pseudo :</u></label><br />
								<input type="text" placeholder="Quel est votre pseudo ?" name="pseudo"  /><br />
				 
								<label for="text"><u>Email :</u></label><br />
								<input type="text" placeholder="Quel est votre adresse email ?" name="email"  /><br />
				
								<label for="text"><u>Commentaire :</u></label><br />
								<input type="text" placeholder="Laisser un petit commentaire ?" name="commentaire" style="width:600px;height:200px;"/><br />

							</fieldset>
							<center><input type="button" value="Valider" name="poster" onClick="veriftextbox(this.form)"/>
							<input type="button" value="Annuler" onclick="self.location.href='index.php'""/></center>
							</font>
					<br>
					</form>
</body>
</html> 