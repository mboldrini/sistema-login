<?php 

	class db{

		public function conectar(){
			$host = "localhost:8081";
			$user = "root";
			$pass = "";
			$dbname = "sistema_login";

			/* parte responsavel para conectar ao banco de dados */
			$conexao = mysql_connect( $host, $user, $pass );

			/* parte responsavel para selecionar o banco de dados */
			$selectdb = mysql_select_db( $dbname );

			return $conexao;

		}#função que conecta no DB e retorna

	}# classe de conectar ao DB
	
?>