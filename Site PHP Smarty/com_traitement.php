<?php
//On inclut la page de connexion et le header
include ('includes/co.inc.php');
include ('includes/header.inc.php');
echo '<div class="span8">';
//on inclut la classe Smarty
require_once("libs/Smarty.class.php"); 
$smarty = new Smarty();
// on recupere l'id et on le stocke dans une variable id ///
$id=$_GET["id"];
// creation d'un tableau /////
$result = array();
// declaration des variable pour stocker les valeurs ////
$pseudo=$_POST['pseudo'];
$email=$_POST['email'];
$commentaire=$_POST['commentaire'];
// requette sql qui permet inserer dans la bdd  id , le commentaire , le pseudo et email ///
$sql_insert = "INSERT INTO commentaire (id_article,commentaire, pseudo, email) values ('$id','$commentaire','$pseudo','$email');";
$exe_sql = mysql_query($sql_insert);// execution de la requette
// declaration des variable smarty pour qu'il puisse les utilise dans le fichier TPL com.tpl //
$identification=identification_cookie();
$smarty->assign('identification_cookie',$identification);
$smarty->display("com.tpl");

header("Location:com.php?id=$id"); 
?>