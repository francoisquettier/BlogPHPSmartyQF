<?php
////////////////////inclue le fichier de connexion///////////////////
require('includes/co.inc.php');
////////////////////fin del'inclusion////////////////////////////////

if(isset($_POST["titre"]) &&
	isset($_POST["texte"]) &&
	isset($_POST["option"]))
			{

////////////////////Declaration de variable pour la requette sql//////
				$titre=$_POST["titre"];
				$corps=$_POST["texte"];
				$option=$_POST["option"];
				$date = date("Y-m-d");

////////////////////Fin de declaration/////////////////////////////////	

////////////////////Requette SQL insertion dans la base////////////////

				$sql="INSERT INTO articles (titre,corps,date,statut) VALUES ('$titre','$corps','$date','$option');";
				mysql_query($sql);

					if (!empty($_POST['datafile']))
						{
						$serveur_image = $_FILES['datafile']['error'];
						}
							else{
									$serveur_image ="";
								}
		
$id=mysql_insert_id();
move_uploaded_file($_FILES['datafile']['tmp_name'], dirname(__FILE__) ."../img/$id.jpg");

/////////////// Si la requette est bonne on retourne sur la page index sinon  on previent l'utilisateur
header("location:index.php");
}

////////////////////Fin de requette SQL////////////////////////////////*

										else{
												header("location:formulaire.php");
											}
?>