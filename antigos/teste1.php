<!DOCTYPE html>
<html>
<head>
<body>
<?php 
if(isset($_POST['enviar'])):
	$formatos = array("xml", "txt");
	$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
	
	if(in_array($extensao, $formatos)):
		$pasta = "xmls/";
		$temp = $_FILES['arquivo']['tmp_name'];
		$novoNome = date('Y-m-d')."-". uniqid().".$extensao";
		
		if(move_uploaded_file($temp, $pasta.$novoNome)):
			$mensagem = "Feito - $pasta.$novoNome";
	else:
			$mensagem = "Erro - $temp";
	endif;				
		else:
			$mensagem = "Formato Invalido<br>";
			endif;
	echo $mensagem;
	endif;
	 ?>
 <br>
<td><a href="upload.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
</body>
</head>
</html>