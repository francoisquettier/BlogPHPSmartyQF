<?php
// Attribut neccessaire pour la connexion a la base de donnée ///
	$serveur="Votre serveur";
	$bdd="Base de donnée";
	$mdp="Mot de passe";
	$user="Utilisateur";
	$co= mysql_connect($serveur,$user,$mdp) or die ("erreur".mysql_error());
	$data=mysql_select_db($bdd);
?>