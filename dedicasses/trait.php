<?php
ini_set("display_errors",0);//Plus d'érreurs
error_reporting(0);//Plus d'érreurs
$player = $_POST['player'];
$msg = $_POST['msg'];
$msg = str_replace('con' ,'***',$msg);
$msg = str_replace('connard' ,'***',$msg);
$msg = str_replace('bites' ,'***',$msg);
$msg = str_replace('bite' ,'***',$msg);
$msg = str_replace('fdp' ,'Feuille de papier',$msg);
$msg = str_replace('idiot' ,'***',$msg);
$fp = fopen ("msg.html", "a");
fputs ($fp, $player);
fputs ($fp, " : ");
fputs ($fp, $msg);
fputs ($fp, "<br />");
fclose ($fp);
header('Location: index.php');
?>