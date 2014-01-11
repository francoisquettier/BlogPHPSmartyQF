<?php
////////////////////inclue le fichier de connexion et du header///////////////////
require('includes/co.inc.php');
include('includes/header.inc.php');
echo '<div class="span8">';

////////////////////fin del'inclusion////////////////////////////////

////////////////////test des variable de l'inscription///////////////
if ( 
	isset($_POST["email"]) &&
	isset($_POST["mdp"]) 
	)
{
////////////////////Declaration de variable pour la requette sql//////
	$email=$_POST["email"];
	$mdp=$_POST["mdp"];
////////////////////Fin de declaration/////////////////////////////////	

////////////////////Requette SQL selection dans la base////////////////
	$erreurco="Votre Login ou votre mot de passe est incorrect";
	$co_bonne="Vous etes authentifié";
	$sql="SELECT mail , mdp FROM utilisateur WHERE mail = '$email' and mdp = '$mdp'";
	$execute = mysql_query($sql);
	
		if ($exe = mysql_fetch_array($execute))
			{
				$sid=sha1($execute['email'].time()); /// hashage du resultat en sha1 ///
				$update = "UPDATE utilisateur SET sid ='$sid' WHERE mail = '$email';"; // requette de mise a jour de la table utilisateur par rapport l'id ///
				mysql_query($update);// execution de la requette  /////
				echo $co_bonne;
				setcookie('sid',$sid,time()+60*60); // definition du temp du cookie ///////
				header('Refresh: 3; url=index.php'); // refresh de la page apres 3 seconde + redirection vers index.php
			}
	
				else 
					{
						echo ($erreurco); // si erreur co n'est pas bonne on redirige vers co.php pour un nouvel essaie apres 3 secondes  ////
						header('Refresh: 3; url=co.php');
					}
}
include ('includes/footer.inc.php'); // inclusion du footer //
//////////////////Fin de requette SQL////////////////////////////////

/////////////////////Fin du test//////////////////////////////////////
?>