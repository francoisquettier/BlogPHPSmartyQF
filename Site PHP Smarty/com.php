<?php
//On inclut la page de connexion et le header
include ('includes/co.inc.php');
include ('includes/header.inc.php');
echo '<div class="span8">';
//on inclut la classe Smarty
require_once("libs/Smarty.class.php"); 
$smarty = new Smarty();
?>
<?php
$id=$_GET["id"]; // on recupere l'id et on le stocke dans une variable
$result = array();// creation du tableau //
$identification=identification_cookie();// creation d'une variable pour stocker la fonction identification_cookie
$smarty->assign('identification_cookie',$identification);// on l'assigne a smarty //
$smarty->assign('id',$id);// on l'assigne a smarty //


//requette de selection de l'article en fonction de l'id ///
$article = "SELECT id, titre, corps, DATE_FORMAT(date, '%d/%m/%Y') as date_fr, statut FROM articles WHERE statut=1 AND id=$id ORDER BY date DESC";

$req = mysql_query($article) or die(mysql_error()."\n".$req); // execution de l'id /////

$data_tab = array();// creation d'un tableau ////

//on stocke les resultat de la requette dans la variable data_tab//
while ($res = mysql_fetch_array($req)) 
{
	$data_tab[] = $res;	
	$smarty->assign('data_tab', $data_tab); // on les assigne a smarty
	
}

//requette sql qui permet de selectionner les champs de la table commentaire , articles et utilisateur , pour que cette requette marche j'ai du faire une jointure a partir de la classe article.id vers commentaire.id //
$select = "SELECT pseudo, commentaire,email from articles, commentaire,utilisateur  WHERE articles.id=commentaire.id_article AND articles.id=$id";
	
$executsql = mysql_query($select); // execution de la requette $select//////

//Insertion des données dans un tableau puis on affiche les données a partir de la variable afficheligne ////
				
while ( $tab = mysql_fetch_array($executsql) ) {
		$data_tab2[] = $tab;
		$smarty->assign('data_tab2',$data_tab2);
		
}
$smarty-> display("com.tpl");// on les affiche dans le fichier com.tpl //
		
include ('includes/footer.inc.php'); // inclusion du footer



?>