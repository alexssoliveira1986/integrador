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
		<strong><br>Consulta XML - Não Autorizado Sefaz</strong></br><br>	
		<form action="baixa-2xml.php" id="chave" target="_self"  <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
		enctype="multipart/form-data" >
		Informar Chave de Acesso <input type="text" name="chave" size="44" maxlength="44" required />
		Informe Unidade:
		<select name="unidade" form="unidade">
		  <option value="U00001">U00001-MATRIZ</option>
		  <option value="U00002">U00002-ITAIM</option>
		  <option value="U00003">U00003-FIANDEIRAS</option>
		  <option value="U00004">U00004-JOAO DIAS</option>
		  <option value="U00008">U00008-BELEM</option>
		  <option value="U00009">U00009-CAMPINAS</option>
		  <option value="U00112">U00112-RIO PRETO</option>
		  <option value="U00222">U00222-RIBEIRAO</option>
		  <option value="U00224">U00224-TATUAPE</option>	  
		</select>
		<input type="submit" name="enviar" value="Baixar"><br>
		</form>
	<br></font>
		<td><a href="select-nf.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
		</p>			
	</body>
</html>