<?php
	ini_set("display_errors",0);//Plus d'érreurs
	error_reporting(0);//Plus d'érreurs
	$fp = fopen ("msg.html", "r+");
	$contenu_du_fichier = fgets ($fp, 255);
	echo 'dernière dédicasse : '.$contenu_du_fichier.''
?>
<html>
	<meta http-equiv="refresh" content="2;URL=dedi.php">
</html>