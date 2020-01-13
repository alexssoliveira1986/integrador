<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Integrador</title>
		<meta charset="utf-8" />
		<meta name="description" content="Integrador" />
		</head>
		<body>
			<h1>Integrador Geral</h1>
			<hr>
		<nav>
		Menu de Navegação
		</nav>	
		<hr>
		<p>
		<br>Selecione o Arquivo XML para verificação do Estado de Destino</br><br>
		<form action="selecione.php" target="_self"  <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
		enctype="multipart/form-data">
		<input type="file" required name="arquivo">- Informar Data de Pagamento: <input type=date name=date required="required">
		<input type="submit" name="enviar">
		</form>	
		

		<br>
		<td><a href="index.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
		<br>
			
		</p>			
	</body>
</html>

