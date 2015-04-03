<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Controle escolar</title>
	<link rel="stylesheet" href="style-login.css">
</head>
<body>

	<div id="login">
		<div class="message"></div><!-- mensagem -->
		<div class="centro-form">
			<form action="" method="POST">
				<p>
					<label for="email" class="labelText">Login:</label>
					<input type="email" id="email" class="textArea bradius" name="email" value="" placeholder="Seu email" />
				</p>

				<p>
					<label for="senha" class="labelText fleft">Senha:</label>
					<input type="password" id="senha" class="textArea bradius" name="senha" value="" placeholder="Sua senha" />
				</p>
				
				<input type="submit" class="submit" value="Login" />

			</form>
		</div><!-- centro do form -->
	</div><!-- login -->

	<?php 
		include("includes/header.php");

	 ?>

</body>
</html>