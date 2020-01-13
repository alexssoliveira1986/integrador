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
		   <?php
    $tatuape = "72855505000149";
    $senha = "1";
	$campinas = "72855505000904";
    $senha1 = "2";
	$riopreto = "72855505001200";
    $senha2 = "3";
	$entrar = $_GET['a'];
    if(isset($_POST["login"]))
	{
       if($_POST["login"] == $tatuape and $_POST["senha"] == $senha) 
	   { 
		require $entrar;
        }
		elseif ($_POST["login"] == $campinas and $_POST["senha"] == $senha1) 
		{ 
		require $entrar;
		}
		elseif ($_POST["login"] == $riopreto and $_POST["senha"] == $senha2) 
		{ 
		require $entrar;
		}
		else
		{
            echo "CNPJ ou Senha Inválido";
        }
    }

    ?>
	<br><br>
		<td><a href="index.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
		</font>
		</p>			
	</body>
</html>

