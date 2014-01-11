<?php
//  On inclus le fichier de connexion , le header ainsi que la classe Smarty  /////
include ('includes/co.inc.php');
include ('includes/header.inc.php');
require_once("libs/Smarty.class.php");

// On assigne a la variable $smarty = new Smarty pour l'afichage  //////
$smarty = new Smarty();

echo '<div class="span8">';
// requette de suppresion par rapport a l'id de l'article et affichage de la page via le display delete.tpl    ////////
if
	(isset($_GET["id"]))
		{
			$id = $_GET["id"];
			$delete_sql = "DELETE FROM articles WHERE id='$id';" ; // requette de suppession par rapport a l'id de l'article //
			mysql_query($delete_sql);
			$delete_sql2 = "DELETE FROM commentaire WHERE id_article='$id';" ; // requette de suppression par rapport a l'id_aticle de la table commentaire //
			mysql_query($delete_sql2);
			$smarty->display("delete.tpl"); // affichage par rapport au template smarty /////
		}
?>
<?php
//  ******** inclusion du footer  ****///////
include ('includes/footer.inc.php');
?>
