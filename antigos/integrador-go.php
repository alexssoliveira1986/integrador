<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Integrador</title><link rel="shortcut icon" href="i5.ico" type="image/x-icon" />
		<meta charset="utf-8" />
		<meta name="description" content="Integrador" />
		</head>
		<body>
			<font face="calibri"> <h1>Integrador - GO</h1>
			<hr>
		<nav>
		<strong>Menu de Navegação</strong>
		</nav>	
		<hr>
		<strong><br>Selecione os Arquivos XML's para Geração do Difal</strong></br><br>
		<form action="go.php" target="_self"  <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
		enctype="multipart/form-data" >
		Informar Data de Pagamento:
		<input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" required > <br><br>
		<input type="file" name="arquivo[]" multiple required>
		<input type="submit" name="enviar"><br><br>	
		</form>
		<br>
		<td><a href="estados.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
		<br></font>
		
		</p>			
	</body>
</html>