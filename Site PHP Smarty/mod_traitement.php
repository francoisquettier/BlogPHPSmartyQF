<?php
////////////////////inclue le fichier de connexion///////////////////
require('includes/co.inc.php');
require('includes/header.inc.php');

////////////////////fin del'inclusion////////////////////////////////
if (identification_cookie()==true)
 {
////////////////////Declaration de variable pour la requette sql//////
	$titre=$_POST["titre"];
	$corps=$_POST["corps"];

////////////////////Fin de declaration/////////////////////////////////	

////////////////////Requette SQL de mise a jour dans la table articles////////////////

	$req="UPDATE articles SET titre ='".$_POST["titre"]."' ,corps = '".$_POST["corps"]."' WHERE articles.id =".$_POST["id"].";";
	//print_r($req);
	mysql_query($req);
			if (!empty($_POST['datafile']))
			{
				$serveur_image = $_FILES['datafile']['error'];
			
			}
		
				else{
						$serveur_image ="";
					}
		
	$id=$_POST["id"];
	move_uploaded_file($_FILES['datafile']['tmp_name'], dirname(__FILE__) ."/img/$id.jpg"); // remplacement de l'image ////
	header("location:index.php");
}
									else
											{
												echo "Vous etes pas autoriser a modifier cette page "; //authentification rater donc affichage d'un message a l'utilisateur ////
											}

?>