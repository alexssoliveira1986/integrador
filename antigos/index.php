<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Integrador</title>
		<meta charset="utf-8" />
		<meta name="description" content="Integrador" />
		</head>
		<body>
			<font face="tahoma"> <h1>Integrador</h1>
		<p>
	<form action="verificar.php?a=entrar-geral.php" method="POST">
		<strong>CNPJ: </strong> <br> <input type="text" name="login" id="login" placeholder="Informar CNPJ"><br><br>
		<strong>Senha: </strong> <br> <input type="password" name="senha" id="senha" placeholder="Informar Senha">
		<button type="button" onclick="submit()">Entrar</button>
    </form><br>
	
			<?php
			
			//require_once ("bd.php");
			
			//$pasta = 'C:\\xampp\htdocs\xmls/';
			
			/*if(is_dir($pasta))
			{
			$diretorio = dir($pasta);

			while(($arquivo = $diretorio->read()) !== false)
			{
			echo '<a href='.$pasta.$arquivo.'>'.$arquivo.'</a><br />';
			}

			$diretorio->close();
			}
			else
			{
			echo 'A pasta não existe.';
			}*/
			?>
	
	</font>
		<br><br>
		</p>			
	</body>
</html>