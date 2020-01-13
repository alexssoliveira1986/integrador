<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Integrador</title>
		<meta charset="utf-8" />
		<meta name="description" content="Integrador" />
		<style>
		table {
		  font-family: tahoma;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #aaaaaa;
		  text-align: left;
		  padding: 2px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
		</head>
		<body>
			<font face="tahoma"> <h1>Integrador</h1>
			<hr>
		<nav>
		<strong>Menu de Navegação</strong>
		</nav>	
		<hr>
		<strong><br>Baixar XML - Autorizado Sefaz</strong></br><br>
		<form action="baixa-1xml.php" id="chave" target="_self"  <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
		enctype="multipart/form-data" >
		Informar Chave de Acesso <input type="text" name="chave" size="44" maxlength="44" required />
		<input type="submit" name="enviar"  value="Baixar">
		</form>
			
	<br></font>
		<td><a href="select-nf.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
		</p>			
	</body>
</html>