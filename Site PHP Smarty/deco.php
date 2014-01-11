<?php
/// inclusion du heater et de la connexion a la base de donnée ///
include ('includes/co.inc.php');
include ('includes/header.inc.php');
//// fin ///
echo '<div class="span8">';
/// destruction du cookie /////
unset($_COOKIE['sid']);
setcookie ('sid',NULL,-1);
/// affichage d'un message utilisateur /////
echo "Vous etes déconnecté vous allez etre redirigé vers la page index !";
/// redirection au bout de 3 secondes sur l'index.php/////
header ('Refresh: 3;url=index.php');
// inclusion du footer ////
include ('includes/footer.inc.php');
?>