<?php

	$serveur="mysql.hostinger.fr";
	$bdd="u270614017_blog";
	$mdp="franois18061990";
	$user="u270614017_blog";
	$co= mysql_connect($serveur,$user,$mdp) or die ("erreur".mysql_error());
	$data=mysql_select_db($bdd);

?>