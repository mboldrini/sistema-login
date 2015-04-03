<?php 
include("./classes/db.class.php");

	$conectar = new db;
	$conectar = $conectar -> conectar();

	$query = mysql_query("SELECT * FROM usuario");

	echo mysql_num_rows($query);
	

	// Metodo de cadastrao
	if(isset($_GET["acao"])){
		$acao = $_GET["acao"];
		if($acao == "cadastrar"){{
			$nome = $_POST["nome"];
		}}
	}

 ?>