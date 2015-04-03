<?php 

	class db{

		public function conectar(){
			$host = "localhost:8081";
			$user = "root";
			$pass = "";
			$dbname = "sistema_login";

			$conexao = mysql_connect( $host, $user, $pass );
			$selectdb = mysql_select_db( $dbname );

			return $conexao;

		}#função que conecta no DB e retorna

	}# classe de conectar ao DB
	
?>