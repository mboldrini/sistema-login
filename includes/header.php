<?php 
include("./classes/db.class.php");

	$conectar = new db;
	$conectar = $conectar -> conectar();

	$query = mysql_query("SELECT * FROM usuario");

	echo mysql_num_rows($query);
	

 ?>