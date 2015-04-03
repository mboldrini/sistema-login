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
					<label for="nome" class="labelText">Nome:</label>
					<input type="text" id="nome" class="textArea bradius" name="nome" placeholder="Seu nome" />
				</p>

				<p>
					<label for="email" class="labelText">Email:</label>
					<input type="email" id="email" class="textArea bradius" name="email" placeholder="Seu email" />
				</p>

				<p>
					<label for="senha" class="labelText fleft">Senha:</label>
					<input type="password" id="senha" class="textArea bradius" name="senha" placeholder="Sua senha" />
				</p>

				<p>
					<label for="nivel" class="labelText fleft">Nivel:</label>
					<input type="text" id="nivel" class="textArea bradius" name="nivel" placeholder="Nivel de acesso" />
				</p>

				<p>
					<label for="ativo" class="labelText fleft">Ativo:</label>
					<input type="text" id="ativo" class="textArea bradius" name="nivel" placeholder="Usuário ativo" />
				</p>
				:)
				
				<input type="submit" class="submit" value="Cadastro" />

			</form>
		</div><!-- centro do form -->
	</div><!-- login -->


</body>
</html>