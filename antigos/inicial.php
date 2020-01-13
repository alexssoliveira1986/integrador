<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Integrador</title>
		<meta charset="utf-8" />
		<meta name="description" content="Integrador" />
		</head>
		<body>
			<h1>Integrador</h1>
		<p>
		<p><span class="error">* Dados Obrigatorios</span></p>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		CNPJ: <input type="text" name="login" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>"><br><br>
		Senha: <input type="password" name="senha" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>"><br><br>
		<button type="submit" name="btn-entrar"> Entrar </button>

		<td><a href="integrador.php" target="_self"> <button type="button" onclick="submit()">XML</button></a></td>
		<br><br>
		</p>			
	</body>
</html>