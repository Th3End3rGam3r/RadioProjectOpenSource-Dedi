<?php
include ("conf.php");
$pass = $_GET['pass'];
if ($pass == $passreal){
	echo 'AdminZone';
	echo '<form action = "adminone.php?pass='.$pass.'" method="post" enctype="multipart/form-data"><input type = "submit" value = "Supprimer les dedicasses"></form>';
}
?>