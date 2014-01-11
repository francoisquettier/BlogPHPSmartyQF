<?php
// on inclus les fichier co , header et footer ///
// on inclus le template smarty pui on l'assigne au fichier TPL connexion.tpl ///
require('includes/co.inc.php');
require_once("libs/Smarty.class.php");
$smarty = new Smarty();
include('includes/header.inc.php');
//include ('fonction.php');
echo '<div class="span8">';
$smarty->display("connexion.tpl");
include ('includes/footer.inc.php');
?>
