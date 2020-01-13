<!DOCTYPE HTML>
<html>
<body>
	<nav>
		<h4>Menu de Arquivo</h4>
		</nav>	
		<td><a href="upload.php" target="_self"> <button type="button" onclick="submit()">XML</button></a></td>
<p>
<br>Upload do Arquivo e Salva com Outro Nome</br>
<form action="teste1.php""<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <input type="submit" name="enviar">
</form>

<br>Upload do Arquivo 2</br><br>
<form action="teste2.php""<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
enctype="multipart/form-data">
    <input type="file" name="arquivo"><br>
	<input type="file" name="arquivo1"><br>
	<input type="file" name="arquivo2"><br>
    <input type="submit" name="enviar">
</form>

<br>Upload do Arquivo 3</br><br>
<form action="teste3.php""<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
enctype="multipart/form-data">
    <input type="file" name="arquivo"> Data de Pagamento: <input type=date name=date>
    <input type="submit" name="enviar">
</form>

<br>Upload do Arquivo 4</br><br>
<form action="teste4.php""<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
enctype="multipart/form-data">
    <input type="file" name="arquivo"> Data: <input type=date name=date>
    <input type="submit" name="enviar">
</form>

<br>Upload do Arquivo 5</br><br>
<form action="teste5.php""<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <input type="submit" name="enviar">
</form>

</p>
<td><a href="index.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
</form>
</body>
</html>

