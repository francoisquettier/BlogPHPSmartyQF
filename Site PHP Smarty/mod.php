<?php
// inclusion de la connexion , du header et de la classe smarty /////
require('includes/co.inc.php');
include ('includes/header.inc.php');
require_once("libs/Smarty.class.php");
$smarty = new Smarty();


echo '<div class="span8">';
// si la personne est connecté elle peut modifier l'article sinon on lui affiche un message //
if ($connect == true)
{
		if ( $_GET['id'] )
			{
	
				$id = ($_GET['id']);
	
				// MODIFICATIONS
				$SQL = "SELECT * from articles WHERE articles.id=$id";
				//print_r($SQL);
				$requete = mysql_query($SQL);// execution de la requette
				$data = mysql_fetch_array($requete);
				extract($data);
				// assignation du contenue au variable et envoi vers smarty pour affichage
				$titre=$data['titre'];
				$smarty->assign("titre",$titre);
				$corps=$data['corps'];
				$smarty->assign("corps",$corps);
				$statut=$data['statut'];
				$smarty->assign("statut",$statut);
				$id=$data['id'];
				$smarty->assign("id",$id);
				$smarty->display("mod.tpl");
			}
}
								else {
										echo '<div class="span8">';
										echo "Vous etes pas autorisé a modifier cette page !" ; // identification rate on affiche un message a l'utilisateur ///
									 }

include ('includes/footer.inc.php');
?>

</body>
</html> 
  

