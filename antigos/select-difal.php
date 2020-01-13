<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Integrador</title>
		<meta charset="utf-8" />
		<meta name="description" content="Integrador" />
		</head>
		<body>
			<font face="tahoma"> <h1>Integrador</h1>
			<hr>
		<nav>
		<strong>Menu de Navegação</strong>
		</nav>	
		<hr>
		<strong><br>Relatório Difal</strong></br><br>
		
		<form action="select-difal-rel.php" target="_self"  <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
		enctype="multipart/form-data" >
		Informar Periodo:
		<input type="text" name="date1" value="<?php echo date('Y-m-d'); ?>" required > 
		<input type="text" name="date2" value="<?php echo date('Y-m-d'); ?>" required > 
		<input type="submit" name="enviar" value="Gerar" ><br>
		</form>
		
	
	<br>
		<td><a href="rel.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
		<br></font>
		
		</p>			
	</body>
</html>
	