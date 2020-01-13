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
		
<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'difal.xls';
		
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
		
	
	<br>
		<td><a href="rel.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
		<br></font>
		
		</p>			
	</body>
</html>
	<?php
	
	require_once ("bd.php");
	
	$date1=date('d-m-Y',strtotime($_POST['date1']));
	$date2=date('d-m-Y',strtotime($_POST['date2']));
	
	$cab='Estado - NF - Serie - Data - Chave de Acesso';
	
	$estado='Estado';
	$notafiscal='NF';
	$serie='Serie';
	$datasel='Data';
	$chaveacesso='Chave de Acesso';
	
	echo 'Periodo ' . $date1 . ' ';
	echo 'entre ' . $date2 .'<br><br>';
	
	//echo date('d-m-Y',  strtotime($date1)).'<br>';
	//echo date('d-m-Y',  strtotime($date2)).'<br>';
	
	echo "<table>" . "<tr>" . "<th>" . $estado  . "</th>";
	echo "<th>" . $notafiscal  . "</th>";
	echo "<th>" . $serie  . "</th>";
	echo "<th>" . $datasel  . "</th>";
	echo "<th>" . $chaveacesso  . "</th>" . "</tr>";
	
	
	
	$sql = ("SELECT DOCEST, DOCNUM, DOCSER, DOCORI, DOCDTR, DOCCHA FROM tb_pcadoc where docest <> 'SP' and docser='55' and docses='S' and docsts <> 'C' and docdtr between '$date1' and '$date2' order by docest, docdtr, docnum");
	foreach ($conn->query($sql) as $row) {
	
    echo "<tr>" . "<td>" . $row['DOCEST'] . "</td>";
	echo "<td>" . $row['DOCNUM'] . "</td>";
	echo "<td>" . $row['DOCSER'] . "</td>";
	echo "<td>" . $row['DOCDTR'] . "</td>";
	echo "<td>" . $row['DOCCHA'] . "</td>" . "</tr>";
	
}
	echo "</table>"
				
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>