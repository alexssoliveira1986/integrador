<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Integrador</title><link rel="shortcut icon" href="i5.ico" type="image/x-icon" />
		<meta charset="utf-8" />
		<meta name="description" content="Integrador" />
		</head>
		<body>
			<h1>Integrador - TO</h1>
			<hr>
		<nav>
		<strong>Menu de Navegação</strong>
		</nav>	
		<hr>
		<p>
		<br>Selecione o Arquivo XML para verificação do Estado de Destino</br><br>
		<form action="to.php" target="_self"  <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
		enctype="multipart/form-data">
		<input type="file" required name="arquivo[]" multiple>
		- Informar Data de Pagamento: <input type="date" name="date" required="required">
		<input type="submit" name="enviar">
		</form>	
		

		<br>
		<td><a href="index.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
		<br>
			
		</p>			
	</body>
</html>