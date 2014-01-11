<?php
require('includes/co.inc.php');
require_once("libs/Smarty.class.php");
$smarty = new Smarty();
?>

<?php
include('includes/header.inc.php');
$req = mysql_query("SELECT * FROM articles WHERE statut=1 ORDER BY date DESC");
?>
<?php
echo '<div class="span8">';

if (isset($_GET['search'])) 
		{
			$search = $_GET["search"];
			echo "<hr>";
			echo "Votre recherche est : <b>" .$search. "</b><br /><br />";
			$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
			$nbArticleParPage = 2;
			$count = ("SELECT COUNT(*) AS nbarticle FROM articles Where statut=1 AND (titre LIKE '%$search%' OR corps LIKE '%$search%')");
			$req= mysql_query($count);
			$resultat=mysql_fetch_array($req);
			$total_article=$resultat['nbarticle'];
			$nbTotalDePage = ceil($total_article / $nbArticleParPage);
			$debut = ($page - 1) * $nbArticleParPage;


				if ($total_article == 0)
					{
						echo "Aucun résultat ne correspond à votre recherche<br /><hr>";
					}
						else 
								{
									if ($total_article == 1)
											{
												echo "<b>un</b> seul résultat correspond à votre recherche</b><hr>";
											}
												else {
														echo "<b>".$total_article. "</b> résultats correspondent à votre recherche<br /><hr>";
													}
								}
//on teste si on a affaire à la recherche ou non

														$sql="SELECT id, titre, corps, DATE_FORMAT(date, '%d/%m/%Y') as date_fr, statut FROM articles where articles.titre LIKE '%$search%' OR articles.corps LIKE '%$search%' ORDER BY date DESC LIMIT $debut, $nbArticleParPage";

		}
																else
																	{
																		$sql2="SELECT id, titre, corps, DATE_FORMAT(date, '%d/%m/%Y') as date_fr, statut FROM articles WHERE statut=1 ORDER BY date DESC";
																		echo "<h2>Derniers Articles :</h2><hr>";
																		//traitement d'une nombre de pages
																		$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

																		$nbarticleParPage = 2;
																		$count = ("SELECT COUNT(*) AS nbarticle FROM articles WHERE statut=1");
																		$reqcount = mysql_query($count);
																		$resultat=mysql_fetch_array($reqcount);
																		$total_article=$resultat["nbarticle"];
																		$nbTotalDePage = ceil($total_article / $nbarticleParPage);
																		$debut=($page - 1) * $nbarticleParPage;

																		$sql=("SELECT id, titre, corps, DATE_FORMAT(date, '%d/%m/%Y') as date_fr, statut FROM articles WHERE statut=1 ORDER BY date DESC LIMIT $debut, $nbarticleParPage");
																		$req = mysql_query($sql2);

																	}
																		$req = mysql_query($sql);
																		//execution de la requête pour récupérer les résultats
																		$data_tab = array();
																			while ($res = mysql_fetch_array($req))
																					{
																						$data_tab[] = $res;	
																					}
																					$identification=identification_cookie();
																					$smarty->assign('identification',$identification);
																					$smarty->assign('data_tab',$data_tab);
																					$smarty->display("index.tpl");

																						if (isset($_GET['search'])) 
																							{
																								$i=1;
																								echo " Page n° ";
																								for ($i; $i<= $nbTotalDePage; $i++)
																									{
																										echo "<a href=\"index.php?recherche=" .$search. "&page=" .$i."\"> $i</a>";
																									}
																							}
																									else {
																											$i=1;
																											echo " Page n° ";
																											for ($i; $i<= $nbTotalDePage; $i++)
																												{		
																													echo "<a href=\"index.php?page=" .$i. "\"> $i</a>";
																												}
																											}
?>
             
<?php

include ('includes/footer.inc.php');

?>         
