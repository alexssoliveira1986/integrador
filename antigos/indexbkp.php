<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Integrador</title>
		<meta charset="utf-8" />
		<meta name="description" content="Integrador" />
		</head>
		<body>
			<h1>Integrador</h1>
		<p>
	<form action="verificar.php?a=entrar.php" method="POST">
	    CNPJ:  <input type="text" name="login" placeholder="Informar CNPJ"><br><br>
        Senha: <input type="password" name="senha" placeholder="Informar Senha">
        <button type="button" onclick="submit()">Acessar</button>
    </form>
	
<?php
	require_once ("bd.php");
	//require_once ("senha.class.php");
	if(isset($_POST['botao'])){
		$arq = $_FILES['arquivo']['name'];
	if (file_exists("C:\\xampp\htdocs1\xmls-bkps/$arq")){	
		$a=1;	
		while(file_exists("C:\\xampp\htdocs1\xmls-bkps/[$a]$arq")){
			$a++;		
		}
		$arq="[".$a."]".$arq;
	}
	if(move_uploaded_file($_FILES['arquivo']['tmp_name'],"C:\\xampp\htdocs1\xmls-bkps/".$arq)){
			$zip = new Zipar();
			$zip->ziparArquivos($arq, $arq.".zip", "C:\\xampp\htdocs1\xmls-bkps/");
			unlink("C:\\xampp\htdocs1\xmls-bkps/$arq");
	$sqlInto = "INSERT INTO xmlcriado(nome) VALUES (:nome)";
	try{
	$into= $db->prepare($sqlInto);
	$into->bindValue(":nome",$arq.".zip",PDO::PARAM_STR);
	if($into->execute()){
		echo 'OK';
	}else{
		echo 'ERRO';
	}
		
}catch(PDOException $e){
	
	echo $e->getMessage();
}	
	}	
}
?>
		<br><br>
	<form action="" enctype="multipart/form-data" name="upload" method="POST">
<div id='nome_arquivo'>
		<input type="file" name="arquivo" />
		<input type="submit" name="botao" value='Enviar'>
		</form>	
		<br><br>
		<table>
		<td width='50'>-ID-</td/>
		<td width='400'>-Nome-</td/>
		<td width='200'>-Download-</td/>
		<table/>
		<br><br>
		<?php
		$sqlReady = "SELECT * FROM xmlcriado";
	try{
		$ready= $db->prepare($sqlReady);
		$ready->execute();
	}catch(PDOException $e){
				echo $e->getMessage();
	}
	while($rs=$ready->fetch(PDO::FETCH_OBJ)){
		?>
			<td><?php echo $rs->id ?><td/>
			<td><?php echo $rs->nome ?><td/>
			<td><a href="C:\AdwCleaner/<?php echo $rs->nome ?>">Download</a><td/>
			<?php
	}
	?>
		<br><br>
		</p>			
	</body>
</html>