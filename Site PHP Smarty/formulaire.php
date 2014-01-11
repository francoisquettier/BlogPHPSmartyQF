<?php
require('includes/co.inc.php'); // inclusion de la connexion a la bdd ///
require_once("libs/Smarty.class.php"); // inclusion de la classe smarty //
$smarty = new Smarty();
include('includes/header.inc.php'); // inclusion du header /////
echo '<div class="span8">';
$smarty->display("formulaire.tpl"); // affichage des données dans le fichier formulaire.tpl //
include ('includes/footer.inc.php'); // inclusion du footer ////
?>
  

