<?php
include ("conf.php");
$pass = $_GET['pass'];
if ($pass == $passreal){
	unlink("msg.html");
	$fp = fopen ("msg.html", "x+");
	fputs ($fp, '<br />');
	header('Location: admin.php?pass='.$pass);
}
?>