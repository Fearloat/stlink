<?php
	session_start();
if	(!isset ($_SESSION['id']) || !isset($_SESSION['user_name'])){ 
	header ("location:index.php");}
?>
