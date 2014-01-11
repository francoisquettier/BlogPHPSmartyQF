<?php
////////////////////inclue le fichier de connexion///////////////////
require('includes/co.inc.php');
////////////////////fin del'inclusion////////////////////////////////
/// teste du contenue ////
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

////////////////////Requette SQL insertion dans la table articles avec les valeur ajouté dans les textbox //////////////////

				$sql="INSERT INTO articles (titre,corps,date,statut) VALUES ('$titre','$corps','$date','$option');";
				mysql_query($sql);

					if (!empty($_POST['datafile'])) /// test de l'image /////
						{
						$serveur_image = $_FILES['datafile']['error']; 
						}
							else{
									$serveur_image ="";
								}
		
$id=mysql_insert_id();
move_uploaded_file($_FILES['datafile']['tmp_name'], dirname(__FILE__) ."/img/$id.jpg"); // upload de l'image dans le dossier img avec comme nom l'id recupere

/////////////// Si la requette est bonne on retourne sur la page index sinon  on previent l'utilisateur
header("location:index.php");
}

////////////////////Fin de requette SQL////////////////////////////////*

										else{
												header("location:formulaire.php");
											}
?>